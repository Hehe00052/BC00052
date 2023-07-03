<?php

namespace App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class needhelp extends Model
{
    use HasFactory;

    protected $table = 'needhelp';

    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}

class needhelpController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Process or store the data as required

        // Example: Store the data in the database
        // Contact::create([
        //     'name' => $name,
        //     'email' => $email,
        //     'message' => $message,
        // ]);

        // Redirect or return a response
    }
}