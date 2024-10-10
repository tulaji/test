<?php
use Illuminate\Database\Eloquent\Model;

class Mtransfer extends Model
{
    protected $table = 'transfered_product';

    public static function rebuildSalesData()
    {
//        $sales = InvoiceItem::all()->toArray();
//
//
//
//        $collection = collect($sales);
//
//        $unique = $collection->unique('itemcode');
//
//        $unique->values()->all();
//
//
//
//
//
//        $out = array();
//
//        foreach ($unique as $item) {
//
//            $item_code = $item['itemcode'];
//
//            if (isset($out[$item_code])) {
//                ++$out[$item];
//            }
//            else {
//                $out[$item] = 1;
//            }
//        }
//
//        foreach ($out as $item => $count) {
//            echo $item.' '.$count."<br />";
//        }
//
//        exit;


        return true;

    }

}