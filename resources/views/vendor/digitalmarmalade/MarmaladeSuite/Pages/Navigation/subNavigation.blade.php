    <ul>
        <li class="{{ Request::route()->getName() === 'msuitePageEdit' ? 'on' : '' }}"><a href="{{ route('msuitePageEdit', ['pageId' => $page->getid()]) }}">Content</a></li>

        
        <li class="{{ Request::route()->getName() === 'msuitePageEditSeo' ? 'on' : '' }}"><a href="#">SEO</a></li>
        <!-- route('msuitePageEditSeo', ['pageId' => $page->getid()]) -->
        
        <li class=""><a href="{{ route('msuitePagePreview', ['pageId' => $page->getid()]) }}" target="_blank">Preview</a></li>
    </ul>
