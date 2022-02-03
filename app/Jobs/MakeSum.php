<?php

namespace App\Jobs;

use App\Jobs\MakeSum;
use App\Notifications\findfour;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class MakeSum implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
            $soma = $this->num1 + $this->num2;     
            if ($soma )
            $soma->notify(new findfour(
                'sucesso!',
                
            ));   
     }
}
