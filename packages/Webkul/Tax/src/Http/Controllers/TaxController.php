<?php

namespace Webkul\Tax\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Core\Repositories\ChannelRepository as Channel;
use Webkul\Tax\Repositories\TaxCategoryRepository as TaxCategory;
use Webkul\Tax\Repositories\TaxRateRepository as TaxRate;
use Webkul\Tax\Repositories\TaxMapRepository as TaxMap;


/**
 * Tax controller
 *
 * @author    Carlos Pinto <kkobtk@gmail.com>
 * @copyright 2018 Carlos Pinto (https://www.fiatex.io)
 */
class TaxController extends Controller
{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * ChannelRepository object
     *
     * @var array
     */
    protected $channel;

    /**
     * Tax Category Repository object
     *
     * @var array
     */
    protected $taxCategory;

    /**
     * Tax Rate Repository object
     *
     * @var array
     */
    protected $taxRate;

    /**
     * Tax Map Repository object
     *
     * @var array
     */
    protected $taxMap;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Core\Repositories\ChannelRepository    $channel
     * @param  \Webkul\Tax\Repositories\TaxCategoryRepository $taxCategory
     * @param  \Webkul\Tax\Repositories\TaxRateRepository     $taxRate
     * @param  \Webkul\Tax\Repositories\TaxMapRepository      $taxMap
     * @return void
     */
    public function __construct(Channel $channel, TaxCategory $taxCategory, TaxRate $taxRate, TaxMap $taxMap)
    {
        $this->middleware('admin');

        $this->channel = $channel;

        $this->taxCategory = $taxCategory;

        $this->taxRate = $taxRate;

        $this->taxMap = $taxMap;

        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->_config['view']);
    }
}