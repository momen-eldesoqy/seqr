<?php


namespace PHPMVC\LIB;
require_once "vendor/autoload.php";
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Color\Color;

class QR
{
    public static function create($data , $size , $label)
    {
        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data($data)
            ->foregroundColor(new Color(0,0,0))
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->size($size)
            ->margin(15)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->labelText($label)
            ->labelFont(new NotoSans(20))
            ->labelAlignment(new LabelAlignmentCenter())
            ->labelTextColor(new Color(0,0,0))
            ->build();

        return $result;
    }
}