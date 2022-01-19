<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Category;
use App\Models\WebSite;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use SebastianBergmann\CodeCoverage\Driver\Selector;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int  $lastInserted = null)
    {
        $idCategory = $lastInserted;
              
        if($idCategory == null){
            $idCategory =DB::table('news')->Select('category')
            ->latest('updated_at')
            ->take(1) 
            -> get();
        }
     
        $categories = Category::all();
       
        $data = array();
        foreach ($categories as  $category) {
            
            $news=array();
            $keyWords = News::select('key_word')->distinct()->where('category',$category->id)->get();
        
            Carbon::setLocale('es');

            foreach($keyWords as  $keyword){              
             
                 $k = DB::table('news')->join('web_sites', 'news.owner', '=', 'web_sites.id') 
                                       ->join('news_categories', 'news.category', '=', 'news_categories.id')
                                       ->where('news.category', $category->id)
                                       ->where('news.key_word', $keyword->key_word)
                                       -> select('news.id','web_sites.web_site_name as owner','key_word', 'headline', 'image', 'Category', 'news.updated_at')
                                       ->orderByDesc('news.updated_at')
                                       ->get();
                foreach($k as  $k1){   
                    $val = new Carbon($k1->updated_at )  ;
                    $k1->updated_at = ucfirst($val->diffForHumans());
                    }
            
                $arrayKeyWords = array("keyWord" => $keyword->key_word,
                                        "news"   => $k);              
            
                array_push($news,$arrayKeyWords);             
            }
        
            $values = array( 
            "categoryID" => $category->id,
            "category"    => $category->category_name,
            "keyWord"     => $news
                );
                array_push($data,$values);    
        }
  
        return view('News.index', compact('data', 'idCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $webSite = WebSite::all('id','web_site_name');

        $category = Category::all('id', 'category_name');

        return view('News.create', compact('category','webSite'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        $headline = News::create($request->all());
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return redirect()->route('news.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(int $news )
    {
       
        $webSite = WebSite::all('id','web_site_name');

        $category = Category::all('id', 'category_name');

        $headline = News::find($news);

        return view('News.edit', compact('headline','category','webSite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $news->update($request->all());
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $news)
    {
        
        News::where('id',$news)->delete();
        return redirect()->route('news.index');

    }
}
