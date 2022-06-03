<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jugar') }}
        </h2>
    </x-slot>
    <div class="informacion-2 justify-content-center">
        <h1 class="estadisticas-del-juego">
            JUEGO
        </h1>
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
                        <button onclick="closeScoreModal()">Continuar</button>
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
                    <img class="imagen" src="display-image" />
                </div>
                <div class="container my-4">
                    <h1 class="text-center" id="display-question">Aquí va la pregunta</h1>
                </div>
                <div class="game-options-container">

               <div class="modal-container" id="option-modal">

                    <div class="modal-content-container">
                         <h1>Please Pick An Option</h1>

                         <div class="modal-button-container">
                            <button onclick="closeOptionModal()">Continue</button>
                        </div>

                    </div>

               </div>

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
                <div class="container botones-pregunta mt-5 justify-content-center">
                    <div class="row justify-content-center mb-3 mt-5">
                        <button class="comodin col-2 justify-content-center">
                            <img alt="" style="width: 45%;"
                                src="https://static.overlay-tech.com/assets/5849ce67-3976-4bb5-bb8e-02ea757979df.svg" />
                            <p class="num">3</p>
                            <img alt="" class="coin"
                                src="https://static.overlay-tech.com/assets/2cf255b2-7047-4b8e-8c84-c3b4b2f3939b.svg" />
                        </button>
                        <button class="comodin col-2 justify-content-center">
                            <img alt="" style="width: 55%;"
                                src="https://static.overlay-tech.com/assets/c4e31349-4c70-4d28-9890-92fea4e6fbd3.svg" />
                            <p class="num">2</p>
                            <img alt="" class="coin"
                                src="https://static.overlay-tech.com/assets/2cf255b2-7047-4b8e-8c84-c3b4b2f3939b.svg" />
                        </button>
                        <button class="comodin col-2 justify-content-center">
                            <img alt="" style="width: 45%;"
                                src="https://static.overlay-tech.com/assets/bdc566d6-6fa3-413a-a279-e13f9a2f5cb9.svg" />
                            <p class="num">5</p>
                            <img alt="" class="coin"
                                src="https://static.overlay-tech.com/assets/2cf255b2-7047-4b8e-8c84-c3b4b2f3939b.svg" />
                        </button>
                    </div>
                </div>
                <div class="next-button-container">
                    <button onclick="handleNextQuestion()">Siguiente</button>
                </div>

            </div>
        </main>
        <script>
            var tiempo = 0;
            var segundos = 30;
            // inicio();

            function inicio() {
                control = setInterval(cronometro, 1000);
            }

            function parar() {
                clearInterval(control);
            }

            function delay(n) {
                return new Promise(function(resolve) {
                    setTimeout(resolve, n * 1000);
                });
            }
            async function reinicio() {
                clearInterval(control);
                segundos = 30;
                Segundos.innerHTML = "00:30";
                await delay(2);
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
                        });
                }
            }

            

            let shuffledQuestions = [] //empty array to hold shuffled selected questions out of all available questions

            function handleQuestions() {
                //function to shuffle and push 10 questions to shuffledQuestions array
                //app would be dealing with 10questions per session
                while (shuffledQuestions.length <= 9) {
                    const random = questions[Math.floor(Math.random() * questions.length)]
                    if (!shuffledQuestions.includes(random)) {
                        shuffledQuestions.push(random)
                    }
                }
            }


            let questionNumber = 1 //holds the current question number
            let playerScore = 0 //holds the player score
            let wrongAttempt = 0 //amount of wrong answers picked by player
            let indexNumber = 0 //will be used in displaying next question

            // function for displaying next question in the array to dom
            //also handles displaying players and quiz information to dom
            function NextQuestion(index) {
                handleQuestions()
                const currentQuestion = shuffledQuestions[index]
                document.getElementById("question-number").innerHTML = questionNumber
                document.getElementById("player-score").innerHTML = playerScore
                document.getElementById("display-image").innerHTML = currentQuestion.image;
                document.getElementById("display-question").innerHTML = currentQuestion.question;
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
                if (options[0].checked === false && options[1].checked === false && options[2].checked === false &&
                    options[3]
                    .checked == false) {
                    document.getElementById('option-modal').style.display = "flex"
                }

                //checking if checked radio button is same as answer
                options.forEach((option) => {
                    if (option.checked === true && option.value === currentQuestionAnswer) {
                        document.getElementById(correctOption).style.backgroundColor = "green"
                        playerScore++ //adding to player's score
                        indexNumber++ //adding 1 to index so has to display next question..
                        //set to delay question number till when next question loads
                        setTimeout(() => {
                            questionNumber++
                        }, 1000)
                    } else if (option.checked && option.value !== currentQuestionAnswer) {
                        const wrongLabelId = option.labels[0].id
                        document.getElementById(wrongLabelId).style.backgroundColor = "red"
                        document.getElementById(correctOption).style.backgroundColor = "green"
                        wrongAttempt++ //adds 1 to wrong attempts 
                        indexNumber++
                        //set to delay question number till when next question loads
                        setTimeout(() => {
                            questionNumber++
                        }, 1000)
                    }
                })
            }



            //called when the next button is called
            function handleNextQuestion() {
                checkForAnswer() //check if player picked right or wrong option
                unCheckRadioButtons()
                //delays next question displaying for a second just for some effects so questions don't rush in on player
                setTimeout(() => {
                    if (indexNumber <= 9) {
                        //displays next question as long as index number isn't greater than 9, remember index number starts from 0, so index 9 is question 10
                        NextQuestion(indexNumber)
                    } else {
                        handleEndGame
                            () //ends game if index number greater than 9 meaning we're already at the 10th question
                    }
                    resetOptionBackground()
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
                let remark = null
                let remarkColor = null

                // condition check for player remark and remark color
                if (playerScore <= 3) {
                    remark = "Mala puntuación, sigue practicando."
                    remarkColor = "red"
                } else if (playerScore >= 4 && playerScore < 7) {
                    remark = "Puntuación media, puedes hacerlo mejor."
                    remarkColor = "orange"
                } else if (playerScore >= 7) {
                    remark = "Enhorabuena, sigue así."
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

            //closes score modal, resets game and reshuffles questions
            function closeScoreModal() {
                questionNumber = 1
                playerScore = 0
                wrongAttempt = 0
                indexNumber = 0
                shuffledQuestions = []
                NextQuestion(indexNumber)
                document.getElementById('score-modal').style.display = "none"
            }

            //function to close warning modal
            function closeOptionModal() {
                document.getElementById('option-modal').style.display = "none"
            }
        </script>
    </body>
</x-app-layout>
