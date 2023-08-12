<?php

namespace App\Http\Controllers\users;
use App\Models\movies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class moviess extends Controller 
{
    public function show($id){
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
        // Hiển thị trang xem phim
        return view('users.page.movie_trailler', compact('movie'));
    }

    public function search(Request $request)
{
    $keyword = $request->input('keyword');
    $movies = Movies::where('title', 'like', '%' . $keyword . '%')
                   ->orWhere('director', 'like', '%' . $keyword . '%')
                   ->get();
    return view('users.page.search', compact('movies'));
}

    public function getMoviesByCategory($categoryId)
    {
        $movies = Movies::where('category_id', $categoryId)->get();
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
                // Các trường khác của comment nếu có
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
        $randomMovies = Movies::inRandomOrder()->limit(5)->get();

        return view('users.page.movie_watching', compact('randomMovies'));
    }
}
