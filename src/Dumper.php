<?php
namespace csi0n\Debug
use Symfony\Component\VarDumper\Cloner\VarCloner;

use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;

/**
 * Created by PhpStorm.
 * User: csi0n
 * Date: 24/02/2017
 * Time: 3:22 PM
 */
class Dumper
{
    /**
     * Dump a value with elegance.
     *
     * @param  mixed $value
     * @return void
     */
    public function dump($value)
    {
        if (class_exists(CliDumper::class)) {
            $dumper = 'cli' === PHP_SAPI ? new CliDumper : new HtmlDumper;

            $dumper->dump((new VarCloner)->cloneVar($value));
        } else {
            var_dump($value);
        }
    }
}
