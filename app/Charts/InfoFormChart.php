<?php

namespace App\Charts;

use App\Models\InfoForm;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class InfoFormChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $formData = InfoForm::all();
        $dates = $formData->pluck('date');
        $formDataCount = $dates->countBy(); // Count the occurrences of each date

        $this->labels($dates->unique()); // Use unique dates as labels
        $this->dataset('Form Submissions', 'bar', $formDataCount->values())->backgroundColor('rgba(75, 192, 192, 0.2)');
    }


}