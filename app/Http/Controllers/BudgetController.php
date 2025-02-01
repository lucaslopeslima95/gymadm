<?php

namespace App\Http\Controllers;

use App\Http\Requests\BudgetRequest;
use App\Mail\BudgetNotification;
use App\Models\Budget;
use Illuminate\Support\Facades\Mail;

class BudgetController extends Controller
{
    public function index()
    {

        return view('budget',
        [
            'gif'=>'https://s3-alpha-sig.figma.com/img/0325/cf7c/e2da4039592bc5138d6f1aea2276e04d?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=IrRYCKKTaTMlc3MT6bgZTg7BQrrsmA0FSos9ZLhy7WGTLdqjLAJxrFW5iAIXDQH6XAPaCLjMahWZXw1uVUx357TP1DU~W7TK7DFit-ehVSwU1uzk16kJZoQXxb4z71NJ5wpj90rAd3G8FutkCuMzsdFyTIP6WYrcfBdVcFTnql2e8uVn-ktcTUFL~1WUFXEXdb98JScWalJ00sI8DVAHyV6iObljEtQaW9y2uqraPqXl-vohkYqGQDK1ZabFQVlckodRJE88HhjJqvPCeH3n2cooaZlwp5AfBXIdRhQzRBAzSrwDNwPHqtavkCRgppTE19oYZFBIPHqfdcRdLmY3Hg__',
            'slot'=>''
        ]
    );
    }

    public function store(BudgetRequest $request)
    {
        $budget = new Budget();
        $budget->name        = $request->input('name');
        $budget->email       = $request->input('email');
        $budget->telephone   = $request->input('telephone');
        $budget->description = $request->input('description');
        $budget->save();
        
        Mail::to(getenv('MAIL_FROM_ADDRESS'))->send(new BudgetNotification($budget->name,$budget->description,$budget->telephone));

        return redirect('/');
    }

}
