<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
use Carbon\Carbon;
use Datetime;

class ExportOrder implements FromView, WithEvents
{
	use Exportable;


	public function registerEvents(): array
	{
		return [
			AfterSheet::class    => function(AfterSheet $event) {
				$event->sheet->getColumnDimension('A')->setWidth(10);
				$event->sheet->getColumnDimension('B')->setWidth(10);
				$event->sheet->getColumnDimension('C')->setWidth(40);
				$event->sheet->getColumnDimension('D')->setWidth(40);
				$event->sheet->getColumnDimension('E')->setWidth(25);
				$event->sheet->getColumnDimension('F')->setWidth(25);
				$event->sheet->getColumnDimension('G')->setWidth(25);

			},
		];
	}

	public function __construct($data){
		$this->data = $data;
	}

	public function view(): View
	{
		return view('admin.order.export', $this->data);
	}
}

?>