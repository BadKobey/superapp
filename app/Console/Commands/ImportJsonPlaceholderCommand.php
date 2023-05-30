<?php

namespace App\Console\Commands;


use App\Components\ImportDataClient;
use Illuminate\Console\Command;


class ImportJsonPlaceholderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:jsonpl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test http console';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $import = new ImportDataClient();
        $responce = $import->client->request('GET', 'posts');
        $data = json_decode($responce->getBody()->getContents());

        foreach ($data as $item) {
            dd ($item);
        }

    }
}
