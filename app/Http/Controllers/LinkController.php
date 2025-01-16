<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;

class LinkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {

        /** @var User $user */
        $user = auth()->user();
        $user->links()->create($request->validated());

        return to_route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        $link->fill($request->validated())->save();

        return to_route('dashboard')->with('message', 'Alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return to_route('dashboard')->with('message', 'Link excluído!');
    }

    /**
     * Set link order up
     */
    public function up(Link $link)
    {
        $order = $link->order;
        $newOrder = $order - 1;

        /** @var User $user */
        $user = auth()->user();

        $swapWith = $user->links()
            ->where('order', '=', $newOrder)
            ->first();

        $link->fill(['order' => $newOrder])->save();
        $swapWith->fill(['order' => $order])->save();

        return back();
    }

    /**
     * Set link order down
     */
    public function down(Link $link)
    {
        $order = $link->order;
        $newOrder = $order + 1;

        /** @var User $user */
        $user = auth()->user();

        $swapWith = $user->links()
            ->where('order', '=', $newOrder)
            ->first();

        $link->fill(['order' => $newOrder])->save();
        $swapWith->fill(['order' => $order])->save();

        return back();
    }
}
