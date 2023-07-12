<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetails;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function index()
    {
        $transaction = Transaction::all();
        return view('staff.transaction.data-transaction', compact('transaction'));
    }
    public function details($id)
    {
        $details = TransactionDetails::where('transactions_id', $id)->get();
        // return dd($details);
        return view('staff.transaction.detail-transaction', compact('details'));
    }
    // Add products
    public function create()
    {
        $customers = Customer::all();
        $products = Product::all();
        $users = User::all();
        $cart = session()->get('cart');
        // return dd($cart);
        return view('staff.transaction.create', compact('customers', 'products', 'users', 'cart'));
    }
    public function cartProducts(Request $request)
    {
        $product = Product::find($request->product);
        $getPrice = $product->price;
        $getcustomersId = $request->customers;
        // return dd($getcustomersId);
        // return dd($product->price);
        $cart = session()->get('cart');
        // return dd($cart);
        if (!isset($cart[$request->product])) {
            $cart[$request->product] = [
                "id" => $request->product,
                "price" => $request->price,
                "date" => $request->date,
                "karyawan" => $request->karyawan,
                "customers" => $request->customers,
                "price" => $getPrice,
                "product" => $request->product,
                "quantity" => $request->post('quantity'),
                "total_after_disc" => $getPrice  * $request->post('quantity')
            ];
        } else {
            if ($getcustomersId  != $cart[$request->product]["customers"]) {
                return redirect()->back()->with('failed', 'Produk gagal ditambahkan kedalam keranjang');
            } else {
                $cart[$request->product]["quantity"] += $request->post('quantity');
                $cart[$request->product]["total_after_disc"] += $request->post('quantity') * $getPrice;
            }
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan kedalam keranjang');
    }
    public function store(Request $request)
    {
        $cart = session()->get('cart');
        // return dd($cart);
        // return dd($request->all());
        $transaction = new Transaction();
        $transaction->date = Carbon::now();
        $transaction->total = $request->grandTotal;
        $saved =  $transaction->save();
        foreach ($cart as $item) {
            $details = new TransactionDetails();
            $details->transactions_id = $transaction->id;
            $details->users_id = $item['karyawan'];
            $details->customers_id = $item['quantity'];
            $details->products_id = $item['id'];
            $details->quantity = $item['quantity'];
            $details->price = $item['price'];
            $details->save();
        }
        if (!$saved) {
            return redirect('/')->with('warning', 'Silahkan Menyelesaikan Pembayaran');
        } else {
            session()->forget('cart');
            return redirect('/data-transaction')->with('success', 'Produk berhasil di order');
        }
        // // $product = Transaction::create([
        // //     'customers_id' => $request->name,
        // //     'products_id' => $request->product,
        // //     'users_id' => $request->users,
        // //     'date' => $request->date,
        // //     'total' => $request->total,
        // // ]);
        // return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }
    public function edit($id)
    {
        $transaction = Transaction::find($id);
        $customers = Customer::all();
        $products = Product::all();
        $users = User::all();
        return view('staff.transaction.edit', compact('transaction', 'customers', 'products', 'users'));
    }
    public function update(Request $request, $id)
    {
        Transaction::where('id', $id)
            ->update(
                [
                    'customers_id' => $request->name,
                    'products_id' => $request->product,
                    'users_id' => $request->users,
                    'date' => $request->date,
                    'total' => $request->total,
                ]
            );
        return redirect('/data-transaction')->with('success', 'Produk berhasil ditambahkan');
    }
    public function destroy($id)
    {
        Transaction::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Produk berhasil dihapus');;
    }
    public function deleteCart($id)
    {
        $cart = session()->get('cart');
        // return dd($cart);
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('deleted', 'Keranjang berhasil dihapus!');
    }
}
