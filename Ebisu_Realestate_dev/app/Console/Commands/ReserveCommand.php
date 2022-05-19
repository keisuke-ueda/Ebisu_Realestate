<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DateTime;
use Illuminate\Support\Facades\DB;

class ReserveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservation_set';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // 本日の日付
        $today = new Datetime();

        // 6/11
        $point_date = new Datetime();
        $point_date->setDate(2022,6,11);

        // 6/11以降は当日レコードを削除する
        if ($today >= $point_date) {
            $delete_date = $today;
            $delete_date_w = $delete_date->format('w');
            $delete_date = $delete_date->format('Y/n/j');

            DB::table('ReservationSet')
            ->where('date', $delete_date)
            ->delete();

            DB::table('Reservation')
            ->where('reservation_date', $delete_date)
            ->delete();

            echo "{$delete_date}.(.{$delete_date_w}.)のデータを削除しました。";
        } else {
            echo "削除データはありません";
        }

    }
}
