<?php

class Search
{
  static function search_updategrid()
  {
    header('Content-Type: text/html');
    $start = $_GET['start'];
    $category = $_GET['cgid'];

    if (isset($_GET['collection'])) {
      $collections = [$_GET['collection']];
    } else if (isset($_GET['prefn1']) && $_GET['prefn1'] == 'collection') {
      $collections = explode('|', $_GET['prefv1']);
    }

    // $total = get_term_by('slug', $category, 'product_cat')->count;
    $query = Product::custom_query($category, $_GET['srule'], $start, collections: $collections);
    $data = $query->get_products();
    $products = $data->products;
    $total = $data->total;

    // $products = wc_products_array_orderby( $products, 'price', 'ASC' );

    foreach ($products as $product) {
      Product::render_product($product);
    }
    Product::render_product_loop_end($category, $start + PRODUCTS_PER_PAGE, $total);

    exit();
  }

  static function search_showajax()
  {
    header('Content-Type: text/html');

    echo "<main class='main'>";
    include get_template_directory() . '/template-parts/archive-product/main.php';
    echo "</main>";

    exit();
  }

  static function searchservices_getsuggestions(WP_REST_Request $request)
  {
    header('Content-Type: text/html');

    $products = array_slice(
      Product::search($request->get_param('q')),
      0, 3
    );
    // $products = Product::custom_query('', '', search: $request->get_param('q'), limit: 3)->get_products()->products;
    include get_template_directory() . '/template-parts/search-results.php';
    exit();
  }
}
