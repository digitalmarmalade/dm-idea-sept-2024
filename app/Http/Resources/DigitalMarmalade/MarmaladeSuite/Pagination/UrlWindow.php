<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Pagination;

use Illuminate\Contracts\Pagination\LengthAwarePaginator as PaginatorContract;

class UrlWindow
{
    /**
     * The paginator implementation.
     *
     * @var \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    protected $paginator;

    /**
     * Create a new URL window instance.
     *
     * @param  \Illuminate\Contracts\Pagination\LengthAwarePaginator  $paginator
     * @return void
     */
    public function __construct(PaginatorContract $paginator)
    {
        $this->paginator = $paginator;
    }

    /**
     * Create a new URL window instance.
     *
     * @param  \Illuminate\Contracts\Pagination\LengthAwarePaginator  $paginator
     * @param  int  $onEachSide
     * @return array
     */
    public static function make(PaginatorContract $paginator, $onEachSide = 3)
    {
        return (new static($paginator))->get($onEachSide);
    }

    /**
     * Get the window of URLs to be shown.
     *
     * @param  int  $onEachSide
     * @return array
     */
    public function get($onEachSide = 2)
    {
        if (!$this->hasPages()) {
            return [
                'first' => null,
                'slider' => null,
                'last' => null
            ];
        }
        
        //if the first page is 1, then show onEachSide x 2, otherwise default behavior (which is onEachSide more on the right)
        if ($this->currentPage() - $onEachSide < 1) {
            $firstPage = 1;
        } elseif ( $this->currentPage() + $onEachSide > $this->lastPage() ) {
            if ($this->lastPage() - ($onEachSide * 2) < 1) {
                $firstPage = 1;
            } else {
                $firstPage = $this->lastPage() - ($onEachSide * 2);
            }
        } else {
            $firstPage = $this->currentPage() - $onEachSide;
        }
        
        if ($firstPage === 1) {
            if (1 + ($onEachSide * 2) > $this->lastPage()) {
                $lastPage = $this->lastPage();
            } else {
                $lastPage = 1 + ($onEachSide * 2);
            }
        } elseif ($this->currentPage() + $onEachSide > $this->lastPage()) {
            $lastPage = $this->lastPage();
        } else {
            $lastPage = $this->currentPage() + $onEachSide;
        }
        
        return [
            'first' => null,
            'slider'  => $this->paginator->getUrlRange($firstPage, $lastPage),
            'last'   => null,
        ];
    }

    /**
     * Get the starting URLs of a pagination slider.
     *
     * @return array
     */
    public function getStart()
    {
        return $this->paginator->getUrlRange(1, 2);
    }

    /**
     * Get the ending URLs of a pagination slider.
     *
     * @return array
     */
    public function getFinish()
    {
        return $this->paginator->getUrlRange(
            $this->lastPage() - 1,
            $this->lastPage()
        );
    }

    /**
     * Determine if the underlying paginator being presented has pages to show.
     *
     * @return bool
     */
    public function hasPages()
    {
        return $this->paginator->lastPage() > 1;
    }

    /**
     * Get the current page from the paginator.
     *
     * @return int
     */
    protected function currentPage()
    {
        return $this->paginator->currentPage();
    }

    /**
     * Get the last page from the paginator.
     *
     * @return int
     */
    protected function lastPage()
    {
        return $this->paginator->lastPage();
    }
}
