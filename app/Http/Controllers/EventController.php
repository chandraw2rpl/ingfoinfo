<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(2);
        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:png,jpeg,jpg',
        ]);

        $image = $request->file('image');
        $name =
            time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/image');
        $image->move($destinationPath, $name);

        Event::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'category_id' => $request->get('category'),
            'image' => $name
        ]);

        return redirect()->back()->with('message', 'Event berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('event.edit', compact('event'));
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);

        $event = Event::find($id);
        $name = $event->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name =

                time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/image');
            $image->move($destinationPath, $name);
        }

        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->category_id = $request->get('category');
        $event->image = $name;
        $event->save();

        return
            redirect()->route('event.index')->with('message', 'event
        information updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return
            redirect()->route('event.index')->with('message', 'event berhasil dihapus');
    }

    public function listPet()
    {
        $categories = Category::with('event')->get();
        return view('index', compact('categories'));
    }

    public function detailPet($id)
    {
        $event = Event::find($id);
        return view('detail', compact('event'));
    }
}



