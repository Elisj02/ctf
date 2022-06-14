<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jugar') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5 mb-5">
        <div class="informacion-2 justify-content-center min-w-full block my-4">
            <h1 class="estadisticas-del-juego">
                JUEGO
            </h1>
        </div>
    </div>

    <body onload="NextQuestion(0)">
        <main>
            <!-- creating a modal for when quiz ends -->
            <div class="modal-container" id="score-modal">
                <div class="modal-content-container">
                    <h1>Enhorabuena, Quiz completado.</h1>
                    <div class="grade-details">
                        <p>Respuestas incorrectas : <span id="wrong-answers"></span></p>
                        <p>Respuestas correctas : <span id="right-answers"></span></p>
                        <p>Puntuación : <span id="grade-percentage"></span>%</p>
                        <p><span id="remarks"></span></p>
                    </div>
                    <div class="modal-button-container">
                        <button onclick="closeScoreModal()">Ir al inicio</button>
                    </div>
                </div>
            </div>
            <!-- end of modal of quiz details-->

            <div class="game-quiz-container">
                <div id="contenedor">
                    &nbsp;<i class="bi bi-stopwatch"></i>
                    <div class="reloj" id="Segundos">00:30</div>
                </div>
                <div class="game-details-container">
                    <h1>Puntos : <span id="player-score"></span> / 10</h1>
                    <h1>Pregunta : <span id="question-number"></span> / 10</h1>
                </div>
                <div class="image-question-container">
                    <img class="imagen" id="display-image" src="" />
                </div>
                <div class="container my-4">
                    <h1 class="text-center" id="display-question">Aquí va la pregunta</h1>
                </div>
                <div class="game-options-container">
                    <span>
                        <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                        <label for="option-one" class="option" id="option-one-label"></label>
                    </span>
                    <span>
                        <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                        <label for="option-two" class="option" id="option-two-label"></label>
                    </span>
                    <span>
                        <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                        <label for="option-three" class="option" id="option-three-label"></label>
                    </span>
                    <span>
                        <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                        <label for="option-four" class="option" id="option-four-label"></label>
                    </span>
                </div>
            </div>
            <div class="next-button-container float-left">
                <button id="comodin" onclick="comodin()" data-toggle="tooltip" data-placement="top"
                    title="Aporta la respuesta correcta a la pregunta para no perder puntos, puedes usarlo una vez por partida">Comodín</button>
            </div>
            <div class="next-button-container float-right">
                <button onclick="handleNextQuestion()">Siguiente</button>
            </div>

            </div>
        </main>
        <script>
            var cheat = false;
            var skip = false;
            var tiempo = 0;
            var segundos = 30;
            inicio();

            function comodin() {
                cheat = true;
                document.getElementById('comodin').disabled = 'true';
                document.getElementById('comodin').style.backgroundColor = 'gray';
                handleNextQuestion();
            }

            function noTime() {
                skip = true;
                handleNextQuestion();
            }

            function inicio() {
                control = setInterval(cronometro, 1000);
            }

            function parar() {
                clearInterval(control);
            }

            async function reinicio() {
                clearInterval(control);
                tiempo = 0;
                segundos = 30;
                Segundos.innerHTML = "00:30";
                inicio();
            }

            function cronometro() {
                if (segundos > 0) {
                    segundos--;
                    tiempo++;
                    if (segundos < 10) {
                        segundos = "0" + segundos;
                    }
                    Segundos.innerHTML = "00:" + segundos;
                }
                if (segundos == 0) {
                    parar();
                    swal("¡Tiempo!", "Pulsa siguiente para seguir jugando",
                        "error", {
                            button: {
                                text: "Siguiente",
                                closeModal: true,
                            },
                        }).then((value) => {
                        noTime();
                    });
                }
            }

            function noAnswer() {
                swal("Error!", "Por favor escoge una opción",
                    "error", {
                        button: {
                            text: "Aceptar",
                            closeModal: true,
                        },
                    }).then((value) => {
                    reinicio();
                });
            }

            var myquestions = <?php echo json_encode($myquestions); ?>;
            var myanswers = <?php echo json_encode($myanswers); ?>;

            var questions = [];
            myquestions.forEach(function(value, index) {
                let r = {}
                r.question = value.question;
                let answ = [];
                myanswers.forEach(answer => {
                    if (value.id == answer.question_id) {
                        answ.push(answer.option);
                    }
                });
                desordenar(answ);
                r.optionA = answ[0];
                r.optionB = answ[1];
                r.optionC = answ[2];
                r.optionD = answ[3];
                r.correctOption = value.answer;
                r.image = value.image;
                r.category_id = value.category_id;
                r.question_id = value.id;
                questions.push(r);
            });

            var partida = [];
            let shuffledQuestions = [] //empty array to hold shuffled selected questions

            function handleQuestions() {
                //function to shuffle and push 10 questions to shuffledQuestions array
                while (shuffledQuestions.length <= 9) {
                    const random = questions[Math.floor(Math.random() * questions.length)]
                    if (!shuffledQuestions.includes(random)) {
                        shuffledQuestions.push(random)
                    }
                }
            }

            let questionNumber = 1
            let playerScore = 0
            let wrongAttempt = 0
            let indexNumber = 0

            // function for displaying next question in the array to dom
            function NextQuestion(index) {
                handleQuestions()
                const currentQuestion = shuffledQuestions[index]
                document.getElementById("question-number").innerHTML = questionNumber
                document.getElementById("player-score").innerHTML = playerScore
                document.getElementById("display-question").innerHTML = currentQuestion.question;
                var url = '{{ URL::asset('/storage/images/') }}'
                document.getElementById("display-image").setAttribute('src', url + '/' + currentQuestion.image);
                document.getElementById("option-one").value = currentQuestion.optionA;
                document.getElementById("option-two").value = currentQuestion.optionB;
                document.getElementById("option-three").value = currentQuestion.optionC;
                document.getElementById("option-four").value = currentQuestion.optionD;
                document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
                document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
                document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
                document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

            }

            function checkForAnswer() {
                const currentQuestion = shuffledQuestions[indexNumber] //gets current Question
                const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
                const options = document.getElementsByName(
                    "option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
                let correctOption = null

                options.forEach((option) => {
                    if (option.value === currentQuestionAnswer) {
                        //get's correct's radio input with correct answer
                        correctOption = option.labels[0].id
                    }
                })

                //checking to make sure a radio input has been checked or an option being chosen
                if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3]
                    .checked == false && cheat == false && skip == false) {
                    noAnswer();
                }

                //checking if checked radio button is same as answer
                options.forEach((option) => {
                    if (option.checked === true && option.value === currentQuestionAnswer || cheat) {
                        document.getElementById(correctOption).style.backgroundColor = "green"
                        playerScore++
                        indexNumber++
                        let p = {};
                        p.user_id = <?php echo Auth::user()->id; ?>;
                        p.question_id = currentQuestion.question_id;
                        p.category_id = currentQuestion.category_id;
                        p.answer = option.value;
                        p.correct = 1;
                        p.tiempo = tiempo;

                        partida.push(p);
                        cheat = false;

                        //set to delay question number till when next question loads
                        setTimeout(() => {
                            questionNumber++
                        }, 1000)
                    } else if (option.checked && option.value !== currentQuestionAnswer || skip) {
                        const wrongLabelId = option.labels[0].id
                        document.getElementById(wrongLabelId).style.backgroundColor = "red"
                        document.getElementById(correctOption).style.backgroundColor = "green"
                        wrongAttempt++
                        indexNumber++

                        let p = {};
                        p.user_id = <?php echo Auth::user()->id; ?>;
                        p.question_id = currentQuestion.question_id;
                        p.category_id = currentQuestion.category_id;
                        p.answer = option.value;
                        p.correct = 0;
                        p.tiempo = tiempo;
                        partida.push(p);
                        skip = false;
                        //set to delay question number till when next question loads
                        setTimeout(() => {
                            questionNumber++
                        }, 1000)
                    }
                })

            }

            //called when the next button is called
            function handleNextQuestion() {
                checkForAnswer()
                unCheckRadioButtons()

                //delays next question displaying for a second
                setTimeout(() => {
                    if (indexNumber <= 9) {
                        NextQuestion(indexNumber)
                    } else {
                        handleEndGame()
                    }
                    resetOptionBackground()
                    reinicio();
                }, 1000);
            }

            //sets options background back to null after display the right/wrong colors
            function resetOptionBackground() {
                const options = document.getElementsByName("option");
                options.forEach((option) => {
                    document.getElementById(option.labels[0].id).style.backgroundColor = ""
                })
            }

            // unchecking all radio buttons for next question(can be done with map or foreach loop also)
            function unCheckRadioButtons() {
                const options = document.getElementsByName("option");
                for (let i = 0; i < options.length; i++) {
                    options[i].checked = false;
                }
            }

            // function for when all questions being answered
            function handleEndGame() {
                save();
                let remark = null
                let remarkColor = null

                // condition check for player remark and remark color
                if (playerScore <= 3) {
                    remark = "Sigue practicando"
                    remarkColor = "red"
                } else if (playerScore >= 4 && playerScore < 7) {
                    remark = "Puedes hacerlo mejor"
                    remarkColor = "orange"
                } else if (playerScore >= 7) {
                    remark = "Enhorabuena!, sigue así"
                    remarkColor = "green"
                }
                const playerGrade = (playerScore / 10) * 100

                //data to display to score board
                document.getElementById('remarks').innerHTML = remark
                document.getElementById('remarks').style.color = remarkColor
                document.getElementById('grade-percentage').innerHTML = playerGrade
                document.getElementById('wrong-answers').innerHTML = wrongAttempt
                document.getElementById('right-answers').innerHTML = playerScore
                document.getElementById('score-modal').style.display = "flex"
            }

            //closes score modal and resets game
            function closeScoreModal() {
                window.location.href = "{{ route('dashboard') }}";
            }

            function desordenar(array) {
                array = array.sort(function() {
                    return Math.random() - 0.5
                });
                return array;
            }

            function save() {
                axios.post('{{ route('uya.store') }}', partida)
            }
        </script>
    </body>
</x-app-layout>
