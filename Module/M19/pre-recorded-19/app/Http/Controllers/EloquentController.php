<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class EloquentController extends Controller
{

    public function learn()
    {


        // return User::get();
        // return User::all();
        // return User::find(2);
        // return User::findOrFail(2);
        // return User::where('email', 'anik@example.com')->first();
        // return User::whereNull('email_verified_at', null)->get();
        // return User::whereBetween('id', [2, 5])->get();
        // return OrderItem::whereBetween('price', [0, 1000])->get();
        // return OrderItem::whereBetween('price', [0, 1000])->select('product_name','price')->get();
        //  return OrderItem::sum('price');
        // return OrderItem::max('price');
        // return OrderItem::min('price');
        // return OrderItem::count('price');
        // return OrderItem::avg('price');

        // $customer = new Customer();

        // $customer->name = 'anik';
        // $customer->email = 'andadffaik55@gmail.com';
        // $customer->phone = '01931654590';
        // $customer->created_at = now();
        // $customer->updated_at = now();

        // $customer->save();


        // $customer = Customer::create([
        //     'name' => 'ritu',
        //     'email' => 'ritu2@gmail.com',
        //     'phone' => '012524882'
        // ]);

        // $customer = Customer::first();

        // $customer = Customer::whereBetween('id', [2, 30])->first();

        // $customer = Customer::firstOrCreate(
        //     ['email' => 'ritu+anik@gmail.com'],           // search by this — treated as unique identifier
        //     ['name' => 'ritu', 'phone' => '012524882'] // only used if creating new
        // );


        // $customer = Customer::findOrFail(2);

        // $customer->name = "Mim By Akter";

        // $customer->save();

        // $customer->update([
        //     'name' => 'joy roy'
        // ]);


        // $product = Product::find(2);

        // $product->increment('stock');
        // $product->decrement('stock', 10);

        // $order_item =  OrderItem::destroy(1);

        // $user = User::find(2);

        // return $user->name;
        // return $user->lower_case_name;


        $user = new User();

        $user->name = 'Anik Mondal';
        $user->email = 'ritu1221@gmail.com';
        $user->password = '12345678';



        $user->save();

        return $user;



    }
}
