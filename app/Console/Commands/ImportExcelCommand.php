<?php

namespace App\Console\Commands;

use App\Imports\ExcelImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
class ImportExcelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:import-excel-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Excel::import(new ExcelImport, public_path('Facebook_location2.xlsx'));
    }
}
