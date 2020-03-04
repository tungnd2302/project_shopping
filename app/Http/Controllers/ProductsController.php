<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{   
    public function overview(){
        return view('backend.main.products.overview');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('backend.main.products.index')->with([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
       return view('backend.main.products.create')->with([
            'categories' => $categories
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $product = new Product();
        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->origin_price = $request->get('origin_price');
        $product->sale_price = $request->get('sale_price');
        $product->quantity = $request->get('quantity');
        $product->status = $request->get('status');
        $product->description = $request->get('description');
        $product->supplier = $request->get('supplier');
        $product->user_id = Auth::user()->id;
        $save = $product->save();

        $image = new Image();
        $image->name = $filename['name'];
        $image->path = $uploadPath['url'];
        $image->product_id= $product->id;
        $image->save();

        alert()->success('Thêm sản phẩm thành công', 'Successfully');
        
        return redirect()->route('backend.product.index');
    }

    public function fileUpload(Request $request)
    {
        $_IMAGE = $request->file('file');//nhận yêu cầu
        $filename = time().$_IMAGE->getClientOriginalName();//thời gian + tên gốc của ảnh
        $uploadPath = 'storage/products/';//file lưu ảnh
        Storage::disk('public')->putFileAs('products', $_IMAGE , $filename);
        // $_IMAGE->move($uploadPath,$filename);//chuyển ảnh
        echo json_encode($filename);//in ra chuỗi gán vào ô input
    }

    public function removeUpload(Request $request)
    {  
       
        try{

            $image = str_replace('"', '', $request->file);
            $directory = public_path() .  '/app/public/products/' . $image;
            @unlink(public_path() .  '/app/public/products/' . $image );

        }
        catch(Exception $e) {

            //echo 'Message: ' .$e->getMessage();

        }
        finally{

            $message = "success";

        }

        return json_encode($image); 
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.main.products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.main.products.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Thêm số lượng sản phẩm
    public function addmore($id)
    {
        return view('backend.main.products.addmore');
    }
}
