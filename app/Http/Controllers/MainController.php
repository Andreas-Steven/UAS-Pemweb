<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

use App\ProductModel;
use File;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth/Index');
    }

    public function LoginView()
    {
        return view('Auth/Login');
    }

    public function RegisterView()
    {
        return view('Auth/Register');
    }

    public function HistoryView()
    {
        return view('Admin/Transaction/History');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Product-CRUD/Add');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'harga' => 'required|integer',
            'stock' => 'required|integer|min:0',
            'descriptions' => 'required',
            'file' => 'required'
        ]);

        $products = new ProductModel;
        $products->Name = $request->name;
        $products->Price = $request->harga;
        $products->Stock = $request->stock;
        $products->Descriptions = $request->descriptions;

        $file = $request->file('file'); // https://www.malasngoding.com/membuat-upload-file-laravel/
        $tujuan_upload = 'FotoProduk';
        $file->move($tujuan_upload, $file->getClientOriginalName());
        $FileName = $file->getClientOriginalName();
        $products->Image = $FileName;

        $products->save();

        return redirect()->route('product')->with('status', 'Data Berhasil Ditambah!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductModel $product)
    {
        return view('Admin/Product-CRUD/Update', compact('product'));
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
        $request->validate([
            'name' => 'required',
            'harga' => 'required|integer',
            'stock' => 'required|integer|min:0',
            'descriptions' => 'required'
        ]);

        $OldFileName = $request->post('OldPhoto');
        echo "Nama Foto Lama: " . $OldFileName;
        
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $tujuan_upload = 'FotoProduk';
            $file->move($tujuan_upload, $file->getClientOriginalName());
            $FileName = $file->getClientOriginalName();
            echo "Nama Foto Baru: " . $FileName;
            File::delete('FotoProduk/'.$OldFileName); //https://www.malasngoding.com/hapus-file-dengan-laravel/
            
            ProductModel::where('ID', $id)->update([
                'Name' => $request->name,
                'Price' => $request->harga,
                'Stock' => $request->stock,
                'Descriptions' => $request->descriptions,
                'Image' => $FileName
            ]);
        }
        else
        {
             ProductModel::where('ID', $id)->update([
                'Name' => $request->name,
                'Price' => $request->harga,
                'Stock' => $request->stock,
                'Descriptions' => $request->descriptions,
                'Image' => $OldFileName
            ]);
        }

        return redirect()->route('product')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // https://stackoverflow.com/questions/35402228/write-custom-query-in-laravel-5
    {
        $del = ProductModel::where('ID', $id)->delete();

        return redirect()->route('product');
    }

    public function show(ProductModel $product)
    {
        

        return $product;
    }
}
