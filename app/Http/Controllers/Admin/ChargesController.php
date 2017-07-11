<?php

namespace App\Http\Controllers\Admin;

use App\Charge;
use app\Exceptions\ChargeNotFoundException;
use App\Http\Requests\ChargeRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ChargesController extends Controller
{
    /**
     * @var User
     */
    public $user;

    /**
     * Initialise the User object and the alias within the
     * parental constructor method.
     * @param User $user
     */
    public function __construct(User $user)
    {

        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws ChargeNotFoundException
     */

    public function index(Request $request)
    {
        try {
            $query = $request->input('q');

            if ($query) {

                $charges = Charge::search($query)->get();

                return view('charges.search', compact('charges'));

            } else {
                $charges = Charge::orderBy('name', 'asc')->get();


                return view('admin.charges.index', compact('charges'));
            }

        } catch (\Exception $e) {

            throw new ChargeNotFoundException($e->getMessage());

        }
        return view('admin.charges.index', compact('charges'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.charges.create');
    }


    /**
     * Store the products and move to the specified
     * storage area.
     *
     * @param ChargeRequest $request
     * @return mixed
     */

    public function store(ChargeRequest $request)
    {

            $user = auth()->user();

            $charge = $user->charges()->create($request->all());

            // Process the uploaded image
            $imageName = $charge->sku. '.' . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(base_path() . '/public/images/charges/', $imageName);

            // Process the electronic download
            if ($request->file('download')) {

                $downloadName = $charge->sku . '.' . $request->file('download')->getClientOriginalExtension();

                $request->file('download')->move(storage_path() . '/downloads/', $downloadName);

                $charge->download = $downloadName;
                $charge->save();
            }

            return redirect()->route('admin.charges.index');

    }


    /**
     * Display the specified resource.
     *
     * @param Charge $charge
     * @return \Illuminate\Http\Response
     *
     */

    public function show(Charge $charge)
    {

        return view('admin.charges.show', compact('charge'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Charge $charge
     * @return Response
     * @internal param int $id
     */

    public function edit(Charge $charge)
    {

        return view('admin.charges.edit', compact('charge'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param ChargeRequest $request
     * @param Charge $charge
     * @return Response
     *
     */

    public function update(ChargeRequest $request, Charge $charge)
    {

        $charge->update($request->all());

        //$user = auth()->user();

        return redirect()->route('admin.charges.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Charge $charge
     * @return Response
     *
     */

    public function destroy(Charge $charge)
    {

        $charge->delete();

        File::delete(base_path() . '/public/imgs/products/', $charge . ".png");

        return redirect()->route('admin.charges.index');

    }


}
