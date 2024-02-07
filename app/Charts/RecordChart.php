<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Record;
use Carbon\Carbon;

class RecordChart
{
    protected $chart;
    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }
    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        // Fetch data from the 'record' table
        $records = Record::select(
            'obat.*', 'siswa.*', 'record.*',
            'record.created_at AS tg'
        )
            ->leftJoin('siswa', 'siswa.id', '=', 'record.id_siswa')
            ->leftJoin('obat', 'obat.id', '=', 'record.id_obat')
            ->get(); // Use get() instead of paginate(10) to retrieve all records

        // Group records by month
        $recordsByMonth = $records->groupBy(function ($date) {
            return Carbon::parse($date->tg)->format('M Y');
        });

        // Get the last 4 months
        $last4Months = Carbon::now()->subMonths(4);

        // Loop through the last 4 months and calculate values
        for ($i = 0; $i < 12; $i++) {
            $currentMonth = $last4Months->copy()->addMonths($i);
            $monthKey = $currentMonth->format('M Y');
    
            $months[] = $monthKey;
            $recordsOfMonth = $recordsByMonth[$monthKey] ?? collect();
            
            $digitalSales[] = $recordsOfMonth->count();
        }

        // Build the chart
        return $this->chart->lineChart()
            ->setTitle('Medical Record Smea')
            ->setSubtitle('jumlah siswa sakit perbulan')
            ->setHeight(400)
            ->addData('siswa', $digitalSales)
            ->setXAxis($months);
    }
}
