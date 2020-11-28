<?
namespace app\models\extended;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\base\Widget;
use yii\data\Pagination;

class Pager extends \yii\widgets\LinkPager
{
    public $url;
    public $pageCssClass = 'paginate_button page-item';
    public $firstPageCssClass = 'first';
    public $lastPageCssClass = 'last';
    public $prevPageCssClass = 'paginate_button page-item previous';
    public $nextPageCssClass = 'paginate_button page-item next';
    public $activePageCssClass = 'active';
    public $disabledPageCssClass = 'disabled';
    // public $nextPageLabel = '<a href="#" aria-controls="datatableRows" data-dt-idx="5" tabindex="0" class="page-link next"><i class="simple-icon-arrow-right"></i></a>';
    public $nextPageLabel = '<i class="simple-icon-arrow-right"></i>';
    // public $prevPageLabel = '<a href="#" aria-controls="datatableRows" data-dt-idx="0" tabindex="0" class="page-link prev"><i class="simple-icon-arrow-left"></i></a>';
    public $prevPageLabel = '<i class="simple-icon-arrow-left"></i>';
    public $firstPageLabel = false;
    public $lastPageLabel = false;
    // public $linkContainerOptions = ['class'=> 'page-link'];


    public function renderPageButtons()
    {
        $pageCount = $this->pagination->getPageCount();
        if ($pageCount < 2 && $this->hideOnSinglePage) {
            return '';
        }

        $buttons = [];
        $currentPage = $this->pagination->getPage();

        // first page
        $firstPageLabel = $this->firstPageLabel === true ? '1' : $this->firstPageLabel;
        if ($firstPageLabel !== false) {
            $buttons[] = $this->renderPageButton($firstPageLabel, 0, $this->firstPageCssClass, $currentPage <= 0, false);
        }

        // prev page
        if ($this->prevPageLabel !== false) {
            if (($page = $currentPage - 1) < 0) {
                $page = 0;
            }
            $buttons[] = $this->renderPageButton($this->prevPageLabel, $page, $this->prevPageCssClass, $currentPage <= 0, false);
        }

        // internal pages
        list($beginPage, $endPage) = $this->getPageRange();
        for ($i = $beginPage; $i <= $endPage; ++$i) {
            $buttons[] = $this->renderPageButton($i + 1, $i, null, $this->disableCurrentPageButton && $i == $currentPage, $i == $currentPage);
        }

        // next page
        if ($this->nextPageLabel !== false) {
            if (($page = $currentPage + 1) >= $pageCount - 1) {
                $page = $pageCount - 1;
            }
            $buttons[] = $this->renderPageButton($this->nextPageLabel, $page, $this->nextPageCssClass, $currentPage >= $pageCount - 1, false);
        }

        // last page
        $lastPageLabel = $this->lastPageLabel === true ? $pageCount : $this->lastPageLabel;
        if ($lastPageLabel !== false) {
            $buttons[] = $this->renderPageButton($lastPageLabel, $pageCount - 1, $this->lastPageCssClass, $currentPage >= $pageCount - 1, false);
        }
        $html = '<div class="row view-pager"><div class="col-sm-12"><div class="text-center"><div class="dataTables_paginate paging_simple_numbers" id="datatableRows_paginate">';
        $options = $this->options;
        $tag = ArrayHelper::remove($options, 'tag', 'ul');
        $html .= Html::tag($tag, implode("\n", $buttons), $options);
        $html .= '</div></div></div></div>';
        return $html;
    }
    protected function renderPageButton($label, $page, $class, $disabled, $active)
    {
        $options = $this->linkContainerOptions;
        $linkWrapTag = ArrayHelper::remove($options, 'tag', 'li');
        Html::addCssClass($options, empty($class) ? $this->pageCssClass : $class);

        if ($active) {
            Html::addCssClass($options, $this->activePageCssClass);
        }
        if ($disabled) {
            Html::addCssClass($options, $this->disabledPageCssClass);
            $disabledItemOptions = $this->disabledListItemSubTagOptions;
            $disabledItemOptions['class'] = 'page-link';
            if (strpos($class, 'next'))
            {
            $disabledItemOptions['class'] .= ' next';
            }
            if (strpos($class, 'prev'))
            {
            $disabledItemOptions['class'] .= ' prev';
            }
            $tag = ArrayHelper::remove($disabledItemOptions, 'tag', 'span');

            return Html::tag($linkWrapTag, Html::tag($tag, $label, $disabledItemOptions), $options);
        }
        $linkOptions = $this->linkOptions;
        $linkOptions['data-page'] = $page;
        $linkOptions['class'] = 'page-link';
        if (strpos($class, 'next'))
        {
        $linkOptions['class'] .= ' next';
        }
        if (strpos($class, 'prev'))
        {
        $linkOptions['class'] .= ' prev';
        }
        // $linkOptions[''] = 'page-link';

        return Html::tag($linkWrapTag, Html::a($label, $this->pagination->createUrl($page), $linkOptions), $options);
    }

}