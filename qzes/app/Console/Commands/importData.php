<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class importData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Volcado de datos en la tabla questions';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::unprepared(file_get_contents('database/migrations/preguntas.sql'));
        DB::unprepared(file_get_contents('database/migrations/respuestas.sql'));
    }
}
