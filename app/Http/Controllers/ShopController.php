<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ServiceBlock;
use App\Portfolio;
use App\OtherService;
use App\Progress;
use App\Client;
use App\Testimonial;
use App\Team;
use App\Blog;
use App\CopyRight;
use App\CoolFact;
use App\Filter;
use App\Setti;
use App\Producto;

use TCG\Voyager\Models\Post;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logo = Setti::where('key', 'site.logo')->first();
        // $contact = Contact::find(1, ['id', 'con_icon', 'con_call', 'con_email']);
        $services = ServiceBlock::all(['ser_id', 'ser_data_wow_delay', 'ser_div_div_i_class', 'ser_h2', 'ser_p', 'ser_a_href_btn', 'ser_a_text_btn']);
        $portfolios = Portfolio::all(['por_id', 'por_div_class_mix', 'por_img_src', 'por_h3', 'por_div_span']);
        $otherservices = OtherService::all(['oth_id', 'oth_article_class', 'oth_data_wow_delay', 'oth_i_class', 'oth_div_h3', 'oth_div_p']);
        $progress = Progress::all(['prs_id', 'prs_div_class', 'prs_data_wow_delay', 'prs_i_class', 'prs_div_h3', 'prs_div_p']);
        $clients = Client::all(['cli_id', 'cli_div_img_src', 'cli_img_alt']);
        $testimonials = Testimonial::all(['tes_id', 'tes_div_class_active', 'tes_img_src', 'tes_div_p', 'tes_div_span_name', 'tes_div_span_company']);
        $teams = Team::all(['tea_id', 'tea_data_wow_delay', 'tea_figure_img_src', 'tea_img_alt', 'tea_h2', 'tea_p', 'tea_a_href_facebook', 'tea_a_href_twitter', 'tea_a_href_linkedin', 'tea_a_href_google_plus']);
        $blogs = Blog::all(['blo_id', 'blo_data_wow_delay', 'blo_div_a_href', 'blo_a_img_src', 'blo_a_img_alt', 'blo_a_href_category', 'blo_a_i_head', 'blo_a_href_item_text', 'blo_a_href_h3', 'blo_div_p', 'blo_a_href_clock', 'blo_a_clock_text', 'blo_a_href_comments', 'blo_a_comments_text', 'blo_a_href_user', 'blo_a_user_text']);
        $copiesrights = CopyRight::find(1, ['cop_id', 'cop_copy_right_text', 'cop_pull_right_text']);
        $coolsfacts = CoolFact::all(['coo_id', 'coo_data_wow_delay', 'coo_i_class_icon', 'coo_h3_span_numero', 'coo_h4_text']);
        $filters = Filter::all(['fil_id', 'fil_data_name', 'fil_data_filter']);
        // $productos = Producto::all(['pro_id', 'pro_div_class_mix', 'pro_precio', 'pro_img_slider', 'pro_img_src', 'pro_h3', 'pro_div_span', 'pro_descripcion', 'pro_descripcion_2', 'pro_informacion', 'pro_tags', 'pro_img_thumbnail', 'pro_presentacion']);
        $productos = Producto::paginate(9, ['pro_id', 'pro_div_class_mix', 'pro_precio', 'pro_img_slider', 'pro_img_src', 'pro_h3', 'pro_div_span', 'pro_descripcion', 'pro_descripcion_2', 'pro_informacion', 'pro_tags', 'pro_img_thumbnail', 'pro_presentacion']);

        return view('shop', ['services'=>$services, 'portfolios'=>$portfolios, 'otherservices'=>$otherservices, 'progress'=>$progress, 'clients'=>$clients, 'testimonials'=>$testimonials, 'teams'=>$teams, 'blogs'=>$blogs, 'copiesrights'=>$copiesrights, 'coolsfacts'=>$coolsfacts, 'filters'=>$filters, 'logo'=>$logo, 'productos'=>$productos]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $producto = Portfolio::find($id, ['por_id', 'por_div_class_mix', 'por_img_src', 'por_h3', 'por_div_span', 'por_precio', 'por_descripcion', 'por_descripcion_2', 'por_informacion', 'por_tags', 'por_img_slider', 'por_img_thumbnail']);
        $logo = Setti::where('key', 'site.logo')->first();
        // $contact = Contact::find(1, ['id', 'con_icon', 'con_call', 'con_email']);
        $services = ServiceBlock::all(['ser_id', 'ser_data_wow_delay', 'ser_div_div_i_class', 'ser_h2', 'ser_p', 'ser_a_href_btn', 'ser_a_text_btn']);
        $portfolios = Portfolio::all(['por_id', 'por_div_class_mix', 'por_img_src', 'por_h3', 'por_div_span']);
        $otherservices = OtherService::all(['oth_id', 'oth_article_class', 'oth_data_wow_delay', 'oth_i_class', 'oth_div_h3', 'oth_div_p']);
        $progress = Progress::all(['prs_id', 'prs_div_class', 'prs_data_wow_delay', 'prs_i_class', 'prs_div_h3', 'prs_div_p']);
        $clients = Client::all(['cli_id', 'cli_div_img_src', 'cli_img_alt']);
        $testimonials = Testimonial::all(['tes_id', 'tes_div_class_active', 'tes_img_src', 'tes_div_p', 'tes_div_span_name', 'tes_div_span_company']);
        $teams = Team::all(['tea_id', 'tea_data_wow_delay', 'tea_figure_img_src', 'tea_img_alt', 'tea_h2', 'tea_p', 'tea_a_href_facebook', 'tea_a_href_twitter', 'tea_a_href_linkedin', 'tea_a_href_google_plus']);
        $blogs = Blog::all(['blo_id', 'blo_data_wow_delay', 'blo_div_a_href', 'blo_a_img_src', 'blo_a_img_alt', 'blo_a_href_category', 'blo_a_i_head', 'blo_a_href_item_text', 'blo_a_href_h3', 'blo_div_p', 'blo_a_href_clock', 'blo_a_clock_text', 'blo_a_href_comments', 'blo_a_comments_text', 'blo_a_href_user', 'blo_a_user_text']);
        $copiesrights = CopyRight::find(1, ['cop_id', 'cop_copy_right_text', 'cop_pull_right_text']);
        $coolsfacts = CoolFact::all(['coo_id', 'coo_data_wow_delay', 'coo_i_class_icon', 'coo_h3_span_numero', 'coo_h4_text']);
        $filters = Filter::all(['fil_id', 'fil_data_name', 'fil_data_filter']);

        return view('product', ['services'=>$services, 'portfolios'=>$portfolios, 'otherservices'=>$otherservices, 'progress'=>$progress, 'clients'=>$clients, 'testimonials'=>$testimonials, 'teams'=>$teams, 'blogs'=>$blogs, 'copiesrights'=>$copiesrights, 'coolsfacts'=>$coolsfacts, 'filters'=>$filters, 'logo'=>$logo, 'producto'=>$producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
