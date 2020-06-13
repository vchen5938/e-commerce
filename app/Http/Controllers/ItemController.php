<?php

namespace App\Http\Controllers;

use App\Item;
use \App\Cgy;
use Illuminate\Http\Request;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $item = Item::where('price', '<', 1000)->orderBy('id', 'desc')->get();
        //$item = Item::where('name','like','%a')->get();
        // $items = Item::getQuery()->select('customer_reviews',DB::raw('sum(num_customer_ratings) as sum'))->groupBy('customer_reviews')->havingRaw('sum(num_customer_ratings) > 5000000000')->get();
        // dd($items);

        // $cgies = Cgy::with('items')->get();
        // return $cgies[0]->items;

        //return Item::orderBy('created_at','desc')->get(); 

        //$items = \App\Item::price()->get();
        $items = \App\Item::price()->orWhere->cgyId(1)->get();
        return $items; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cgies = \App\Cgy::pluck('name', 'id');
        //dd($cgies);
        return view('items/create', compact('cgies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd();
        // $item = new Item;
        // $item->name = '手機一台';
        // $item->price = '15000';
        // $item->cover_image = 'https://member.ithome.com.tw/avatars/88232?s=ithelp';
        // $item->product_description = 'Product';
        // $item->product_information = 'Product';
        // $item->url = 'https://member.ithome.com.tw/avatars/88232?s=ithelp';
        // $item->brand = 'apple';
        // $item->cgy_id = '1';
        // $item->save();
        // return 'saved';

        // $data = [
        //     'name' => '手機一台',
        //     'price' => '15000',
        //     'cover_image' => 'https://member.ithome.com.tw/avatars/88232?s=ithelp',
        //     'product_description' => 'Product',
        //     'product_information' => 'Product',
        //     'url' => 'https://member.ithome.com.tw/avatars/88232?s=ithelp',
        //     'brand' => 'apple',
        //     'cgy_id' => '1'
        // ];

        // $item = new Item($data);
        // $item->save();

        // $item = Item::create($data);
        // $item->name = 'name2';
        // $item->save();

        dd($request->json('name'));

        Item::create($request->all());
        return redirect(url('/items'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        // $item = Item::findOrFail($id);
        // dd($item);
        // $item = Item::where('customer_reviews','>=',4)->orderBy('num_customer_ratings','desc')->orderBy('customer_reviews','desc')->first();
        // return $item;

        
        // dd($item->cgy->id);
        
        $cgy_6 = \App\Cgy::find(6);
        $item->cgy()->associate($cgy_6);
        $item->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $cgies = \App\Cgy::pluck('name', 'id');
        return view('items/edit', compact('cgies', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        // $item->name = 'item1';
        // $item->save();

        //$item = Item::updateOrCreate(['id' => $item->id], ['name' => 'item2']);
        $data = $request->except(['_method', '_token']);

        //dd($request->all());
        $item = Item::updateOrCreate(['id' => $item->id], $data);
        return redirect(url('/items'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //$item->delete();

        Item::destroy($item->id);

        //Item::destroy([3,4,5]);
    }

    public function updateItem(Item $item)
    {
        $item->name = 'test me';
        $item->save();
    }

    public function testAccessor(Item $item){
        //return $item->item_name;
        return $item->getAttributes()['name'];
    }

    public function testMutator(Item $item){
        $item->name = $item->getAttributes()['name'];
        $item->save();
        return redirect('/');
    }

    public function testCast(Item $item){
        dd($item->json);
    }

    public function sell_at(Item $item){
        dd($item['sell_at']);
    }

}
