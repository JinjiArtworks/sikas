<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('staff.products.data-product', compact('product'));
    }
    // Add products

    public function create()
    {
        return view('staff.products.create');
    }
    public function store(Request $request)
    {
        if ($request->image != null) {
            $destinationPath = '/img';
            $request->image->move(public_path($destinationPath), $request->image->getClientOriginalName());
            $product = Product::create([
                'name' => $request->name,
                'image' => $request->image->getClientOriginalName(),
                'description' => $request->description,
                'stock' => $request->stock,
                'price' => $request->price,
            ]);
        }
        return redirect('/dashboard');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('staff.products.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $destinationPath = '/img';
        $request->image->move(public_path($destinationPath), $request->image->getClientOriginalName());
        Product::where('id', $id)
            ->update(
                [
                    'name' => $request->name,
                    'image' => $request->image->getClientOriginalName(),
                    'description' => $request->description,
                    'price' => $request->price,
                    'stock' => $request->stock,
                ]
            );
        return redirect('/dashboard');
    }
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->back()->with('deleted','Produk berhasil dihapus');
    }
}
