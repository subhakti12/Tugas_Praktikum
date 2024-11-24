<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ProductsExport implements FromCollection, WithHeadings, WithStyles
{
    /**
     * Menambahkan header pada file Excel
     * 
     * @return array
     */
    public function headings(): array
    {
        return [
            'No',           
            'Product Name', 
            'Unit',         
            'Type',       
            'Information',  
            'Qty',         
            'Producer',    
        ];
    }

    /**
     * Mengatur gaya untuk worksheet
     * 
     * @param Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:G1')->getFont()->setBold(true); 
        $sheet->getStyle('A1:G' . $sheet->getHighestRow())->getAlignment()->setHorizontal('center'); 
        
        return [];
    }

    /**
     * Mengambil data produk yang akan diexport
     * 
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $products = Product::orderBy('id', 'asc')->get([
            'id',           
            'product_name', 
            'unit',         
            'type',         
            'information',  
            'qty',          
            'producer',    
        ]);

        $products = $products->map(function ($product, $index) {
            $product->id = $index + 1; 
            return $product;
        });

        return $products;
    }
}
