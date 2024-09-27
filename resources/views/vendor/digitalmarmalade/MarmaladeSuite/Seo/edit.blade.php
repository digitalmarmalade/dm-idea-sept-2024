<p class="standard">
    <label>SEO Title </label><input type="text" name="seo_title" value="{{ old('seo_title', $seo->getTitle()) }}" />
</p>
<p class="standard">
    <label>SEO Description </label><input type="text" name="seo_description" value="{{ old('seo_description', $seo->getDescription()) }}" />
</p>
<p class="standard">
    <label>SEO Keywords </label><input type="text" name="seo_keywords" value="{{ old('seo_keywords', $seo->getKeywords()) }}" />
</p>