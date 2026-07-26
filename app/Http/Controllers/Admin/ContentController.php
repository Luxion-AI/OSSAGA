<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    public function index()
    {
        $berita = Content::where('type', 'berita')->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.berita', compact('berita'));
    }

    public function create()
    {
        return view('pages.admin.berita-form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required|in:draft,published',
        ]);

        $content = new Content();
        $content->title = $request->title;
        $content->slug = Str::slug($request->title);
        $content->type = 'berita';
        $content->content = $request->content;
        $content->excerpt = Str::limit(strip_tags($request->content), 100);
        $content->status = $request->status;
        $content->author_id = auth()->id();
        $content->save();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit(Content $beritum)
    {
        return view('pages.admin.berita-form', ['berita' => $beritum]);
    }

    public function update(Request $request, Content $beritum)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required|in:draft,published',
        ]);

        $beritum->title = $request->title;
        $beritum->slug = Str::slug($request->title);
        $beritum->content = $request->content;
        $beritum->excerpt = Str::limit(strip_tags($request->content), 100);
        $beritum->status = $request->status;
        $beritum->save();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diupdate');
    }

    public function destroy(Content $beritum)
    {
        $beritum->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
