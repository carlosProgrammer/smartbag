<?php

namespace Webkul\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\DataGrids\TestDataGrid;

/**
 * TestDataGrid controller
 *
 * @author    Nikhil Malik <nikhil@webkul.com> @ysmnikhil
 * @author    Carlos Pinto <kkobtk@gmail.com> @prashant-webkul
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */
class DataGridController extends Controller
{
    protected $_config;
    protected $testgrid;

    public function __construct(TestDataGrid $testgrid)
    {
        $this->middleware('admin');

        $this->_config = request('_config');

        $this->testgrid = $testgrid;
    }

    public function massDelete() {
        dd(request()->all());
    }

    public function massUpdate() {
        dd(request()->all());
    }

    public function testGrid() {
        return $this->testgrid->render();
    }
}
