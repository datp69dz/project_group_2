<?php

namespace App\Http\Controllers\users;
<<<<<<< HEAD
use App\Models\Movie;
=======
use App\Models\movies;
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
<<<<<<< HEAD
use App\Models\Payment;
=======
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
use Illuminate\Support\Facades\Auth;

class moviess extends Controller 
{
    public function show($id){
<<<<<<< HEAD
// Gọi thông tin phim theo id
$movie = Movie::find($id);
// Lấy danh sách comment cho phim hiện tại
$comments = $this->CommentsForMovie($id);

// Lấy danh sách bộ phim tương tự từ hàm getSimilarMovies
$similarMovies = $this->getSimilarMovies($movie->category_id, $movie->id);

// Kiểm tra trạng thái phim
$movieStatus = $this->checkMovieStatus($movie);

// Kiểm tra trạng thái đăng nhập của người dùng
$userPaymentStatus = 'unauthenticated'; // Giả sử người dùng chưa đăng nhập
if (Auth::check()) {
    $userPaymentStatus = $this->checkUserPaymentStatus(Auth::user()->account_id);
}

// Hiển thị trang xem phim tùy theo trạng thái phim và người dùng
if ($movieStatus === 'payment_required' && $userPaymentStatus !== '2') {
    return view('users.page.payment_required', compact('movie'));
} elseif ($movieStatus === '1' || $userPaymentStatus === '2') {
    return view('users.page.movie_detail', compact('movie', 'comments', 'similarMovies'));
} else {
    return view('users.page.payment_required');
}
    }

    public function checkMovieStatus($movie)
    {
        if ($movie->status === 'Lost money') {
            return 'payment_required';
        } elseif ($movie->status === '1') {
            return '1';
        } else {
            return 'unknown';
        }
    }

    public function checkUserPaymentStatus($accountId)
    {
        $payment = Payment::where('account_id', $accountId)->first();
        
        if ($payment) {
            if ($payment->status === '2') {
                return '2';
            } else {
                return '1';
            }
        } else {
            return 'no_payment_info';
        }
    }
    public function watch(Request $request, $id)
    {
        // Gọi thông tin phim theo id
        $movie = Movie::find($id);
        // Lấy danh sách comment cho phim hiện tại
        $comments = $this->CommentsForMovie($id);
        
        // Lấy danh sách bộ phim tương tự từ hàm getSimilarMovies
        $similarMovies = $this->getSimilarMovies($movie->category_id, $movie->id);
        
        // Kiểm tra trạng thái phim
        $movieStatus = $this->checkMovieStatus($movie);
        
        // Kiểm tra trạng thái đăng nhập của người dùng
        $userPaymentStatus = 'unauthenticated'; // Giả sử người dùng chưa đăng nhập
        if (Auth::check()) {
            $userPaymentStatus = $this->checkUserPaymentStatus(Auth::user()->account_id);
        }
        
        // Hiển thị trang xem phim tùy theo trạng thái phim và người dùng
        if ($movieStatus === 'payment_required' && $userPaymentStatus !== '2') {
            return view('users.page.payment_required', compact('movie'));
        } elseif ($movieStatus === '1' || $userPaymentStatus === '2') {
            return view('users.page.movie_watching', compact('movie', 'comments', 'similarMovies'));
        } else {
            return view('users.page.payment_required');
        }
    }    

    public function getSimilarMovies($categoryId, $excludeMovieId, $limit = 2)
    {
        return Movie::where('category_id', $categoryId)
                    ->where('movie_id', '<>', $excludeMovieId)
                    ->inRandomOrder()
                    ->limit($limit)
                    ->get();
    }

    

    public function trailler($id)
    {
        // Gọi thông tin phim theo id
        $movie = Movie::find($id);
=======
        // gọi tất cả thông tin theo id
        $movie = movies::find($id);
        // Hiển thị chi tiết phim
        return view('users.page.movie_detail', compact('movie'));
    }

    public function watch(Request $request, $id)
    {
        // Gọi thông tin phim theo id
        $movie = Movies::find($id);
        // Lấy danh sách comment cho phim hiện tại
        $comments = $this->CommentsForMovie($id);
        // Lấy giá trị reviewId từ request (nếu có)
        $reviewId = $request->input('reviewId');
        // Hiển thị trang xem phim
        return view('users.page.movie_watching', compact('movie', 'comments',));
    }

    public function trailler($id)
    {
        // Gọi thông tin phim theo id
        $movie = Movies::find($id);
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
        // Hiển thị trang xem phim
        return view('users.page.movie_trailler', compact('movie'));
    }

    public function search(Request $request)
{
    $keyword = $request->input('keyword');
<<<<<<< HEAD
    $movies = Movie::where('title', 'like', '%' . $keyword . '%')
=======
    $movies = Movies::where('title', 'like', '%' . $keyword . '%')
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
                   ->orWhere('director', 'like', '%' . $keyword . '%')
                   ->get();
    return view('users.page.search', compact('movies'));
}

    public function getMoviesByCategory($categoryId)
    {
<<<<<<< HEAD
        $movies = Movie::where('category_id', $categoryId)->get();
=======
        $movies = Movies::where('category_id', $categoryId)->get();
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
        return view('users.page.category', compact('movies'));
    }

    public function comment(Request $request)
    {
        if (Auth::check()) {
            // Lấy thông tin user đang đăng nhập
            $user = Auth::user();
            // Lấy thông tin movie_id từ request
            $movie_id = $request->input('movie_id');
            // Lấy thông tin content từ request và validate
            $request->validate([
                'content' => 'required|string|max:255',
            ]);
    
            // Tạo comment mới và lưu vào CSDL
            $comment = new Comment([
                'content' => $request->input('content'),
                'movie_id' => $movie_id, // Sử dụng thông tin movie_id từ request
                'account_id' => $user->account_id,
<<<<<<< HEAD
                'comments_date' => now(), // Thêm trường comments_date với giá trị hiện tại
                'comments_update' => now(), // Thêm trường comments_update với giá trị hiện tại
=======
                // Các trường khác của comment nếu có
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
            ]);
            $comment->save();
            return back()->with('success', 'Comment đã được gửi thành công.');
            // Redirect hoặc trả về response phù hợp sau khi thêm comment thành công
        } else {
            // Nếu chưa đăng nhập, đưa ra thông báo yêu cầu đăng nhập
            return redirect()->route('get_login')->with('message', 'Bạn cần đăng nhập để comment.');
        }
    }
    

//     public function comment(Request $request, $reviewId)
// {
//     $request->validate([
//         'content' => 'required|string|max:255',
//     ]);

//     // Tạo comment mới và lưu vào CSDL
//     $commentData = [
//         'content' => $request->input('content'),
//         'review_id' => $reviewId,
//         'created_at' => now(),
//         'updated_at' => now(),
//         // Các trường khác của comment nếu có
//     ];

//     Comment::create($commentData);

//     // Redirect hoặc trả về response phù hợp sau khi thêm comment thành công
//     return redirect()->route('users.page.movie_watching');
// }


    public function CommentsForMovie($movieId)
    {
        $comments = Comment::where('movie_id', $movieId)->get();
        return $comments;
    }

    public function randomMovies(){
        // Lấy danh sách phim ngẫu nhiên (ví dụ lấy 5 phim)
<<<<<<< HEAD
        $randomMovies = Movie::inRandomOrder()->limit(5)->get();

        return view('users.page.movie_watching', compact('randomMovies'));
    }

    
=======
        $randomMovies = Movies::inRandomOrder()->limit(5)->get();

        return view('users.page.movie_watching', compact('randomMovies'));
    }
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
}
