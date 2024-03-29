<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use App\Models\Blog\PostCategory;
use App\Models\Master\Gallery;
use App\Models\Master\GalleryCategory;
use App\Models\Master\PartnerCompany;
use App\Models\Master\PartnerSchool;
use App\Models\Master\Product;
use App\Models\Master\ProductCategory;
use App\Models\Master\Portfolio;
use App\Models\Master\PortfolioCategory;
use App\Models\Project;
use App\Models\Media;
use App\Models\Master\Faq;
use App\Models\Master\Term;
use App\Models\Master\Testimony;
use App\Models\Master\Servicelist;
use App\Models\Master\Superiority;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        // if (config('config.site.enable_site')) {
        //     return \Site::view('index');
        // }

        return redirect()->route('app');
    }
    public function index(Request $request)
    {
        $data_front_end = $this->getDataFrontEnd($request);

        $posts = Post::with('postcategory')->orderBy('id', 'DESC')->limit(4)->get();
        $products = Product::with('productcategory')->orderBy('id', 'DESC')->limit(4)->get();
        $portfolios = Portfolio::with('portfoliocategory')->orderBy('id', 'DESC')->limit(4)->get();
        $gallerys = Gallery::with('gallerycategory')->orderBy('id')->limit(4)->get();
        $projects = Project::orderBy('id', 'DESC')->limit(4)->get();
        $faqs = Faq::orderBy('id', 'DESC')->limit(4)->get();
        $partnercompanys = PartnerCompany::orderBy('id', 'DESC')->limit(4)->get();
        $partnerschools = PartnerSchool::orderBy('id', 'DESC')->limit(4)->get();
        $terms = Term::orderBy('id', 'DESC')->limit(4)->get()->reverse();
        $testimonys = Testimony::orderBy('id', 'DESC')->limit(4)->get()->reverse();
        $servicelists = Servicelist::orderBy('id', 'DESC')->limit(9)->get()->reverse();
        $superioritys = Superiority::orderBy('id', 'DESC')->limit(4)->get()->reverse();

        $data = [
            'social_network' => $data_front_end['social_network'],
            'general' => $data_front_end['general'],
            'copyright' => $data_front_end['copyright'],
            'footer' => $data_front_end['footer'],
            'posts' => $posts,
            'products' => $products,
            'portfolios' => $portfolios,
            'gallerys' => $gallerys,
            'projects' => $projects,
            'partnercompanys' => $partnercompanys,
            'partnerschools' => $partnerschools,
            'faqs' => $faqs,
            'terms' => $terms,
            'testimonys' => $testimonys,
            'servicelists' => $servicelists,
            'superioritys' => $superioritys,
        ];

        return view('landing.pages.home', $data);
    }
    public function products(Request $request)
    {
        $productcategories = ProductCategory::orderBy('id', 'ASC')->get();
        $selectedProductcategoryId = $request->input('productcategory');

        $productsQuery = Product::with('productcategory')->orderBy('id', 'DESC');

        if ($selectedProductcategoryId !== null) {
            $productsQuery->where('product_category_id', $selectedProductcategoryId);
        }

        $products = $productsQuery->paginate(6);

        return view('landing.pages.product', compact('products', 'productcategories', 'selectedProductcategoryId'));
    }
    public function productdetail($uuid, Request $request)
    {
        $products = Product::where('uuid', $uuid)->first();
        $productcategory = Product::orderBy('id', 'desc')->where('product_category_id', $products->product_category_id)->get();
        $product_category_id = $products->product_category_id;
    
        // Misalnya, kita ambil semua media terkait dengan produk
        $medias = Media::where('token','1f00c244-0a42-4e23-9ae7-2804977fcd78')->get();
        // dd($medias);
        // Mendapatkan produk sebelumnya
    $prevProduct = Product::where('id', '<', $products->id)->orderBy('id', 'desc')->first();
    
    // Mendapatkan produk berikutnya
    $nextProduct = Product::where('id', '>', $products->id)->orderBy('id', 'asc')->first();
        return view('landing.pages.product-detail', compact('products', 'productcategory', 'product_category_id', 'medias', 'prevProduct', 'nextProduct'));
    }
    
    public function portfolios(Request $request)
    {
        $portfoliocategories = PortfolioCategory::orderBy('id', 'ASC')->get();
        $selectedPortfoliocategoryId = $request->input('portfoliocategory');

        $portfoliosQuery = Portfolio::with('portfoliocategory')->orderBy('id', 'DESC');

        if ($selectedPortfoliocategoryId !== null) {
            $portfoliosQuery->where('portfolio_category_id', $selectedPortfoliocategoryId);
        }

        $portfolios = $portfoliosQuery->paginate(6);

        

        return view('landing.pages.portfolio', compact('portfolios', 'portfoliocategories', 'selectedPortfoliocategoryId'));
    }
    public function portfoliodetail($uuid, Request $request)
    {
        // Mengambil data portfolio berdasarkan UUID
        $portfolio = Portfolio::where('uuid', $uuid)->first();
    
        // Memastikan portfolio ditemukan sebelum melanjutkan
        if ($portfolio) {
            // Mengambil portfoliocategory dengan penanganan nilai null menggunakan optional()
            $portfoliocategory = Portfolio::orderBy('id', 'desc')
                ->where('portfolio_category_id', optional($portfolio->portfoliocategory)->id)
                ->get();
    
            // Menyimpan ID portfoliocategory dengan penanganan nilai null menggunakan optional()
            $portfolio_category_id = optional($portfolio->portfoliocategory)->id;
    
            // Mengambil media terkait
            $medias = Media::where('token', '1f00c244-0a42-4e23-9ae7-2804977fcd78')->get();
    
            // Mengambil portfolio sebelumnya
            $prevPortfolio = Portfolio::where('id', '<', $portfolio->id)->orderBy('id', 'desc')->first();
    
            // Mengambil portfolio berikutnya
            $nextPortfolio = Portfolio::where('id', '>', $portfolio->id)->orderBy('id', 'asc')->first();
    
            // Mengirimkan data ke view
            return view('landing.pages.portfolio-detail', compact(
                'portfolio',
                'portfoliocategory',
                'portfolio_category_id',
                'medias',
                'prevPortfolio',
                'nextPortfolio'
            ));
        } else {
            // Jika portfolio tidak ditemukan, kembalikan 404
            abort(404);
        }
    }
    // public function projectdetail($uuid, Request $request)
    // {
    //     $project = Project::where('uuid', $uuid)->first();
    //     return view('landing.pages.project-detail', compact('project'));
    // }


    // public function projects(Request $request)
    // {

    //     $projects = Project::orderBy('id', 'DESC')->paginate(6);

    //     return view('landing.pages.project', compact('projects'));
    // }


    
    public function service()
    {
        return view('landing.pages.service');
    }
    public function company()
    {
        return view('landing.pages.company');
    }
    public function partnercompany(Request $request)
    {
        $partnercompanys = PartnerCompany::orderBy('id', 'DESC')->paginate(6);
        return view('landing.pages.partner-company ', compact('partnercompanys'));
    }
    public function partnerschool(Request $request)
    {
        $partnerschools = PartnerSchool::orderBy('id', 'DESC')->paginate(6);
        return view('landing.pages.partner-school', compact('partnerschools'));
    }
    public function gallery(Request $request)
    {
        $gallerycategories = GalleryCategory::orderBy('id', 'ASC')->get();
        $selectedGallerycategoryId = $request->input('gallerycategory');

        $gallerysQuery = Gallery::with('gallerycategory')->orderBy('id');

        if ($selectedGallerycategoryId !== null) {
            $gallerysQuery->where('gallery_category_id', $selectedGallerycategoryId);
        }

        $gallerys = $gallerysQuery->paginate(6);

        return view('landing.pages.gallery', compact('gallerys'));
    }
    public function posts(Request $request)
    {
        $postcategories = PostCategory::orderBy('id', 'ASC')->get();
        $selectedPostcategoryId = $request->input('postcategory');

        $postsQuery = Post::with('postcategory')->orderBy('id', 'DESC');

        if ($selectedPostcategoryId !== null) {
            $postsQuery->where('post_category_id', $selectedPostcategoryId);
        }

        $posts = $postsQuery->paginate(5);

        return view('landing.pages.post', compact('posts', 'postcategories', 'selectedPostcategoryId'));
    }

    public function postdetail($uuid, Request $request)
    {
        $posts = Post::where('uuid', $uuid)->first();

        if ($posts) {
            $postcategory = Post::where('post_category_id', $posts->post_category_id)->limit(3)->get();
            $post_category_id = $posts->post_category_id;

            return view('landing.pages.post-detail', compact('posts', 'postcategory', 'post_category_id'));
        } else {
            abort(404);
        }
    }

    public function searchPosts(Request $request)
    {
    $searchTerm = $request->input('search');

    $postcategories = PostCategory::orderBy('id', 'ASC')->get();

    $postsQuery = Post::with('postcategory')->orderBy('id', 'DESC');

    if (!empty($searchTerm)) {
        $postsQuery->where(function ($query) use ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('description', 'like', '%' . $searchTerm . '%');
        });
    }

    $posts = $postsQuery->paginate(5);

    return view('landing.pages.post', compact('posts', 'postcategories', 'searchTerm'));
    }

    public function contact()
    {
        return view('landing.pages.contact');
    }
    public function signin()
    {
        return view('landing.pages.signin');
    }
    public function forgotpassword()
    {
        return view('landing.pages.forgot-password');
    }
    public function term()
    {
        $terms = Term::orderBy('created_at', 'asc')->get()->toArray(); // Assuming 'created_at' is the timestamp for when the term was created

        // Sort the terms array based on the 'created_at' field
        usort($terms, function($a, $b) {
            return $a['created_at'] <=> $b['created_at'];
        });
        $terms = Term::orderBy('id', 'DESC')->paginate(6);
        return view('landing.pages.term', compact('terms'));
    }

    // HomeController.php

    // HomeController.php

    // HomeController.php




}
