<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\PostStore;
use App\Http\Requests\PostUpdate;
use App\Services\ArticleServices;
use App\Services\CategoryServices;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleServices;

    private $categoryServices;

    public function __construct(ArticleServices $articleServices, CategoryServices $categoryServices)
    {
        parent::__construct();
        $this->articleServices = $articleServices;
        $this->categoryServices = $categoryServices;
    }

    /**
     * Show all posts in paginate.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $dataArticles = $this->articleServices->getIndexArticles($request->all(), $this->articleType);

        $templateCategory = $this->categoryServices->getSelectCategory($request->old('parent_id'));

        return view('backend.article.index', [
            'articles' => $dataArticles['articles'],
            'name' => $dataArticles['name'],
            'pageSize' => $dataArticles['pageSize'],
            'idCategory' => $dataArticles['idCategory'],
            'groups' => $dataArticles['groups'],
            'templateCategory' => $templateCategory
        ]);
    }

    /**
     * Create post.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function create(Request $request)
    {
        $templateCategory = $this->articleServices->getCheckboxCategory(
            $this->categoryType,
            $request->old('parent')
        );

        $name = $request->old('name') ? $request->old('name') : '';
        $slug = $request->old('slug') ? $request->old('slug') : '';

        return view('backend.article.create', [
            'templateCategory' => $templateCategory,
            'name' => $name,
            'slug' => $slug
        ]);
    }

    /**
     * Store post.
     * @param PostStore $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function store(PostStore $request)
    {
        $response = $this->articleServices->createPost($request, $this->articleType);

        return redirect()->route('post.index')->with([
            'success' => $response
        ]);
    }

    /**
     * Edit post.
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function edit(Request $request, $id)
    {
        try {
            $dataPost = $this->articleServices->getPostInformationById($request, $id);

            $templateCategory = $this->articleServices->getCheckboxCategory(
                $this->categoryType,
                $dataPost['post_category']
            );

            return view('backend.article.update', [
                'templateCategory' => $templateCategory,
                'post' => $dataPost['post'],
                'name' => $dataPost['name'],
                'slug' => $dataPost['slug']
            ]);
        } catch (\Exception $exception) {
            return abort(404);
        }
    }

    /**
     * Update post by id.
     * @param PostUpdate $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function update(PostUpdate $request, $id)
    {
        $response = $this->articleServices->updatePost($request, $id);

        return redirect()->route('post.index')->with([
            'success' => $response
        ]);
    }

    /**
     * Delete post by id.
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $response = $this->articleServices->deletePost($id);

        return redirect()->route('post.index')->with([
            'success' => $response
        ]);
    }
}
