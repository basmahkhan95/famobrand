<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Testimonials'] = Testimonial::orderBy('id', 'desc')->get();
        return view('admin.testimonial.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()):

            $validator = \Validator::make($request->all(), [
                'client_name' => ['required', 'string', 'max:50'],
                'testimonial' => ['required', 'string'],
            ]);

            if ($validator->fails()) {
                return response()->json([
                        'message' => $validator->errors()->all()[0],
                        'class' => 'alert-danger',
                        'status' => false]
                );
            }

            $testimonial = new Testimonial();
            $testimonial->client_name = $request->client_name;
            $testimonial->testimonial = $request->testimonial;
            $testimonial->save();

            $message = 'Testimonial has been added!';

            $request->session()->flash('success', $message);

            return response()->json([
                'message' => $message,
                'class' => 'alert-success',
                'status' => true,
                'redirect' => route('admin.testimonial.index')
            ]);

        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->ajax()):

            $validator = \Validator::make($request->all(), [
                'id' => ['required', 'integer', 'exists:testimonials,id'],
                'client_name' => ['required', 'string', 'max:50'],
                'testimonial' => ['required', 'string'],
            ]);

            if ($validator->fails()) {
                return response()->json([
                        'message' => $validator->errors()->all()[0],
                        'class' => 'alert-danger',
                        'status' => false]
                );
            }

            $testimonial = Testimonial::find($request->id);
            $testimonial->client_name = $request->client_name;
            $testimonial->testimonial = $request->testimonial;
            $testimonial->save();

            $message = 'Testimonial has been updated!';

            $request->session()->flash('success', $message);

            return response()->json([
                'message' => $message,
                'class' => 'alert-success',
                'status' => true,
                'redirect' => route('admin.testimonial.index')
            ]);

        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Testimonial::destroy($id);

        $request->session()->flash('success', 'Testimonial has been deleted!');

        return response()->json(['status' => true, 'message' => 'Testimonial has been deleted!', 'redirect' => route('admin.testimonial.index')]);

    }
}
