<?php

namespace App\Http\Controllers;

use App\CaseGift;
use App\Cases;
use App\Chance;
use App\User;
use App\Winner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function cases()
    {
        $cases = Cases::all();

        return view('admin.cases.list', [
            'cases' => $cases,
        ]);
    }

    public function create_case(Request $request, Cases $cases)
    {
        $input = $request->all();
        if (!empty($input)) {
            $cases->name = $input['name'];
            $cases->price = $input['price'];
            $cases->percent = $input['percent'];
            $cases->save();

            return redirect()->action('AdminController@cases');
        }
        return view('admin.cases.create');
    }

    public function edit_case($id, Request $request)
    {
        $case = Cases::find($id);
        $input = $request->all();
        if (!empty($input)) {
            $case->update([
                'name' => $input['name'],
                'price' => $input['price'],
                'percent' => $input['percent'],
            ]);
            return redirect()->to('admin/cases');
        }

        return view('admin.cases.edit_case', [
            'case' => $case,
        ]);
    }

    public function delete_case($id)
    {
        $case = Cases::where('id', '=', $id)->first();
        foreach ($case->gifts as $gift) {
            $gift->delete();
        }
        $case->delete();


        return redirect()->to('admin/cases');
    }

    public function gifts($id)
    {
        $case = Cases::find($id);

        return view('admin.gifts.list', [
            'case' => $case,
        ]);
    }

    public function create_gift(Request $request, $id)
    {
        $input = $request->all();
        $cases = Cases::all();
        if (!empty($input)) {
            $gift = new CaseGift();
            $gift->cash = $input['cash'];
            $gift->case_id = $id;
            $gift->save();

            return redirect()->to('admin/case/' . $id);
        }

        return view('admin.gifts.create', [
            'cases' => $cases,
        ]);
    }

    public function edit_gift($id, Request $request)
    {
        $gift = CaseGift::find($id);
        $cases = Cases::all();
        $input = $request->all();
        if (!empty($input)) {
            $gift->update(['cash' => $input['cash'], 'case_id' => $gift->case_id]);
            return redirect()->to('admin/case/' . $gift->case_id);
        }

        return view('admin.gifts.edit_gift', [
            'cases' => $cases,
            'gift' => $gift,
        ]);
    }

    public function delete_gift($id)
    {
        $gift = CaseGift::where('id', '=', $id)->first();
        $gift->delete();

        return redirect()->to('admin/case/' . $gift->case_id);
    }

    public function users()
    {
        $users = User::all();

        return view('admin.users.list', [
            'users' => $users,
        ]);
    }

    public function chances($id)
    {
        $chances = Chance::where('case_id', '=', $id)->get();
        $case = Cases::find($id);
        return view('admin.chances.list', [
            'chances' => $chances,
            'case' => $case,
        ]);
    }

    public function chance_create(Request $request, $id)
    {
        $input = $request->all();
        if (!empty($input)) {
            $chance = new Chance();
            $chance->case_id = $id;
            $chance->chance = $input['chance'];
            $chance->raise = $input['price'];
            $chance->save();

            return redirect()->to('admin/case/' . $id . '/chances');
        }
        return view('admin.chances.create');
    }

    public function edit_chance($id, Request $request)
    {
        $chance = Chance::find($id);
        $input = $request->all();
        if (!empty($input)) {
            $chance->update(['chance' => $input['chance'], 'raise' => $input['price']]);

            return redirect()->to('admin/case/' . $chance->case_id . '/chances');
        }
        return view('admin.chances.edit', [
            'chance' => $chance,
        ]);
    }

    public function winners()
    {
        $winners = Winner::all();

        return view('admin.winners.list', [
            'winners' => $winners,
        ]);
    }

}
