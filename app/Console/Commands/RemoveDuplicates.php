<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Meal;

class RemoveDuplicates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:duplicates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove duplicate entries from the meals table';

    /**
     * Execute the console command.
     * 
     * @return mixed
     */
    public function handle()
    {
        $keepMealIds = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 21, 22];
        $duplicateMeals = Meal::whereNotIn('id', $keepMealIds)->get();
        
        foreach($duplicateMeals as $meal) {
            $meal->delete();
        }

        $this->info('Duplicate entires have benn removed successfully');
    }
}
