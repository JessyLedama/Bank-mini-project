<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balance;
use App\Transaction;

class BankTransactions extends Controller
{
    public function balance()
    {
        return view('home', ['balance' => Balance::first()]);
    }

    public function deposit(Request $request)
    {
        $deposits = Transaction::where('type', 'd')->first();

        if($deposits->amount < 150000 && $deposits->count < 4 && $request->amount <= 40000) {

            $balance = Balance::first();
            $balance->amount += $request->amount;
            $balance->save();

            $deposits->count ++;
            $deposits->amount += $request->amount;

            return redirect('/');
        }
        else if($deposits->amount >150000){

            return "Sorry, you have exceeded the total amount you can deposit today, please try again tomorrow.";

        }

        else if($deposits->count >4){

            return "Sorry, you have exceeded the number f deposit transactions for today, please try again tomorrow.";

        }

        else if($request->amount > 40000 ){

            return "Sorry, your deposit amount is greater than the amount allowed for one transaction, please deposit a lower amount.";

        }

        else {

            return "Sorry, an unknown error occured, please try again!";
        }
    }

    public function withdraw(Request $request)
    {

        $withdraw = Transaction::where('type', 'w')->first();

        if($withdraw->amount < 50000 && $withdraw->count < 3 && $request->amount <= 20000) {

            $balance = Balance::first();
            $balance->amount -= $request->amount;
            $balance->save();

            $withdraw->count ++;
            $withdraw->amount += $request->amount;

            return redirect('/');
        }
        else if($withdraw->amount >50000){

            return "Sorry, you have exceeded the total amount you can withdraw today, please try again tomorrow.";

        }

        else if($withdraw->count >3){

            return "Sorry, you have exceeded the number of withdrawal transactions for today, please try again tomorrow.";

        }

        else if($request->amount > 20000 ){

            return "Sorry, your withdrawal amount is greater than the amount allowed for one transaction, please withdraw a lower amount.";

        }

        else {

            return "Sorry, an unknown error occured, please try again!";
        }

    }
}
