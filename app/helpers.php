<?php

use Intervention\Image\Facades\Image;

function generateSlug($string)
{
    // Mảng ánh xạ các ký tự có dấu thành không dấu
    $vietnameseMap = [
        'a' => ['à', 'á', 'ạ', 'ả', 'ã', 'â', 'ầ', 'ấ', 'ậ', 'ẩ', 'ẫ', 'ă', 'ằ', 'ắ', 'ặ', 'ẳ', 'ẵ'],
        'e' => ['è', 'é', 'ẹ', 'ẻ', 'ẽ', 'ê', 'ề', 'ế', 'ệ', 'ể', 'ễ'],
        'i' => ['ì', 'í', 'ị', 'ỉ', 'ĩ'],
        'o' => ['ò', 'ó', 'ọ', 'ỏ', 'õ', 'ô', 'ồ', 'ố', 'ộ', 'ổ', 'ỗ', 'ơ', 'ờ', 'ớ', 'ợ', 'ở', 'ỡ'],
        'u' => ['ù', 'ú', 'ụ', 'ủ', 'ũ', 'ư', 'ừ', 'ứ', 'ự', 'ử', 'ữ'],
        'y' => ['ỳ', 'ý', 'ỵ', 'ỷ', 'ỹ'],
        'd' => ['đ'],
        'A' => ['À', 'Á', 'Ạ', 'Ả', 'Ã', 'Â', 'Ầ', 'Ấ', 'Ậ', 'Ẩ', 'Ẫ', 'Ă', 'Ằ', 'Ắ', 'Ặ', 'Ẳ', 'Ẵ'],
        'E' => ['È', 'É', 'Ẹ', 'Ẻ', 'Ẽ', 'Ê', 'Ề', 'Ế', 'Ệ', 'Ể', 'Ễ'],
        'I' => ['Ì', 'Í', 'Ị', 'Ỉ', 'Ĩ'],
        'O' => ['Ò', 'Ó', 'Ọ', 'Ỏ', 'Õ', 'Ô', 'Ồ', 'Ố', 'Ộ', 'Ổ', 'Ỗ', 'Ơ', 'Ờ', 'Ớ', 'Ợ', 'Ở', 'Ỡ'],
        'U' => ['Ù', 'Ú', 'Ụ', 'Ủ', 'Ũ', 'Ư', 'Ừ', 'Ứ', 'Ự', 'Ử', 'Ữ'],
        'Y' => ['Ỳ', 'Ý', 'Ỵ', 'Ỷ', 'Ỹ'],
        'D' => ['Đ']
    ];

    // Loại bỏ các dấu từ các ký tự tiếng Việt
    foreach ($vietnameseMap as $nonDiacritic => $diacritics) {
        $string = str_replace($diacritics, $nonDiacritic, $string);
    }

    // Chuyển đổi chuỗi thành chữ thường
    $string = mb_strtolower($string, 'UTF-8');

    // Loại bỏ các ký tự không phải là chữ và số
    $string = preg_replace('/[^a-z0-9\s-]/u', '', $string);

    // Thay thế khoảng trắng và các ký tự đặc biệt bằng dấu gạch ngang
    $string = preg_replace('/[\s-]+/', '-', $string);

    // Loại bỏ các dấu gạch ngang thừa
    $string = trim($string, '-');

    return $string;
}
if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        return \Carbon\Carbon::parse($date)->format('d/m/Y');
    }
}
if (!function_exists('filterContent')) {
    function filterContent($content)
    {
        // Biểu thức chính quy để khớp với các thẻ heading
        $pattern = '/<h([1-6])[^>]*>(.*?)<\/h\1>/is';

        // Mảng để lưu các kết quả khớp
        $matches = [];

        // Tìm tất cả các thẻ heading trong nội dung
        preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);
        // dd($matches);
        // In các thẻ heading đã tìm thấy
        foreach ($matches as $match) {
            echo 'Found heading: ' . $match[0] . PHP_EOL;
            echo 'Heading level: h' . $match[1] . PHP_EOL;
            echo 'Heading content: ' . $match[2] . PHP_EOL;
            echo PHP_EOL;
        }
        return $content;
    }
}
if (!function_exists('checkPermission')) {
    function checkPermission($role, $method = 'GET', $user=null)
    {
        if($user){
            $roles = $user->roles;
        }else{
            $roles = Auth::user()->roles;
        }
        if ($roles == null) return false;

        $roles = json_decode($roles);
        if(in_array($method, ['POST', 'PUT'])){
            if (!in_array('edit', $roles)) return False;
        }elseif($method == `DELETE`){
            if (!in_array('delete', $roles)) return False;
        }

        if (in_array($role, $roles)) return true;
        return False;
    }
}
if (!function_exists('limitString')) {
    function limitString($string, $limit)
    {
        // Kiểm tra độ dài của chuỗi
        if (strlen($string) <= $limit) {
            return $string; // Nếu chuỗi ngắn hơn hoặc bằng giới hạn, trả về chuỗi gốc
        } else {
            // Nếu chuỗi dài hơn giới hạn, cắt chuỗi và thêm dấu ...
            return substr($string, 0, $limit) . '...';
        }
    }
}
if (!function_exists('upload_image2')) {
    function upload_image2(
        $folder = 'images',
        $key = 'avatar',
        $validation = 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|sometimes'
    ) {
        request()->validate([$key => $validation]);

        $file = null;

        if (request()->hasFile($key)) {
            $uploadedFile = request()->file($key);

            // Generate unique file name
            $file_extension = $uploadedFile->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;

            // Save original image
            $original_path = $uploadedFile->storeAs($folder, $file_name, 'public');

            // Convert to WebP
            $webp_file_name = pathinfo($file_name, PATHINFO_FILENAME) . '.webp';
            // dd($webp_file_name);
            $webp_file_path = Storage::disk('public')->path($folder . '/' . $webp_file_name);
            // Delete the original uploaded file
            if ($file_extension != 'webp') {

                Image::make($uploadedFile)->encode('webp', 75)->save($webp_file_path);
                Storage::disk('public')->delete($original_path);
            }

            $file = $folder . '/' . $webp_file_name; // Đường dẫn đầy đủ của file WebP
        }
        // dd($file);
        return $file;
    }
}
if (!function_exists('upload_image3')) {
    function upload_image3(
        $name,
        $folder = 'images',
        $key = 'avatar',
        $validation = 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|sometimes'
    ) {
        request()->validate([$key => $validation]);

        $file = null;

        if (request()->hasFile($key)) {
            $uploadedFile = request()->file($key);

            // Generate unique file name
            $file_extension = $uploadedFile->getClientOriginalExtension();
            $file_name = $name . '.' . $file_extension;

            // Save original image
            $original_path = $uploadedFile->storeAs($folder, $file_name, 'public');

            // Convert to WebP
            $webp_file_name = pathinfo($file_name, PATHINFO_FILENAME) . '.webp';
            // dd($webp_file_name);
            $webp_file_path = Storage::disk('public')->path($folder . '/' . $webp_file_name);
            // Delete the original uploaded file
            if ($file_extension != 'webp') {

                Image::make($uploadedFile)->encode('webp', 75)->save($webp_file_path);
                Storage::disk('public')->delete($original_path);
            }

            $file = $folder . '/' . $webp_file_name; // Đường dẫn đầy đủ của file WebP
        }
        return $file;
    }
}
if (!function_exists('upload_video')) {
    function upload_video($folder = 'videos', $key = 'video', $validation = 'mimes:mp4,mov,avi|max:102400|sometimes')
    {
        request()->validate([$key => $validation]);

        $file = null;

        if (request()->hasFile($key)) {
            $uploadedFile = request()->file($key);

            // Generate unique file name
            $file_extension = $uploadedFile->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;

            // Save original video
            $original_path = $uploadedFile->storeAs($folder, $file_name, 'public');

            // No need to convert video to another format
            $file = $folder . '/' . $file_name; // Đường dẫn đầy đủ của file video
        }

        return $file;
    }
}
// if (!function_exists('upload_image2')) {
//     function upload_image2($folder = 'images', $key = 'avatar', $validation = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|sometimes')
//     {
//         request()->validate([$key => $validation]);

//         $file = null;

//         if (request()->hasFile($key)) {
//             $file = Storage::disk('public')->putFile($folder, request()->file($key), 'public');
//         }

//         return $file;
//     }
// }
if (!function_exists('display_image')) {
    function display_image($path, $type = 'posts')
    {
        // TODO leave this line in production.
        return $path && Storage::disk('public')->exists($path) ? asset('storage/' . $path) : asset('demo1/media/default.jpg');
    }
}
if (!function_exists('display_video')) {
    function display_video($path, $type = 'videos')
    {
        return $path && Storage::disk('public')->exists($path) ? asset('storage/' . $path) : asset('path/to/default/video.mp4');
    }
}

if (!function_exists('display_default_image')) {
    function display_default_image()
    {
        // TODO leave this /dline in production.
        return asset('assets/media/default-image.jpg');
    }
}
if (!function_exists('get_svg_icon')) {
    function get_svg_icon($path, $class = null, $svgClass = null)
    {
        if (strpos($path, 'media') === false) {
            $path = theme()->getMediaUrlPath() . $path;
        }

        $file_path = public_path($path);

        if (!file_exists($file_path)) {
            return '';
        }

        $svg_content = file_get_contents($file_path);

        if (empty($svg_content)) {
            return '';
        }

        $dom = new DOMDocument();
        $dom->loadXML($svg_content);

        // remove unwanted comments
        $xpath = new DOMXPath($dom);
        foreach ($xpath->query('//comment()') as $comment) {
            $comment->parentNode->removeChild($comment);
        }

        // add class to svg
        if (!empty($svgClass)) {
            foreach ($dom->getElementsByTagName('svg') as $element) {
                $element->setAttribute('class', $svgClass);
            }
        }

        // remove unwanted tags
        $title = $dom->getElementsByTagName('title');
        if ($title['length']) {
            $dom->documentElement->removeChild($title[0]);
        }
        $desc = $dom->getElementsByTagName('desc');
        if ($desc['length']) {
            $dom->documentElement->removeChild($desc[0]);
        }
        $defs = $dom->getElementsByTagName('defs');
        if ($defs['length']) {
            $dom->documentElement->removeChild($defs[0]);
        }

        // remove unwanted id attribute in g tag
        $g = $dom->getElementsByTagName('g');
        foreach ($g as $el) {
            $el->removeAttribute('id');
        }
        $mask = $dom->getElementsByTagName('mask');
        foreach ($mask as $el) {
            $el->removeAttribute('id');
        }
        $rect = $dom->getElementsByTagName('rect');
        foreach ($rect as $el) {
            $el->removeAttribute('id');
        }
        $xpath = $dom->getElementsByTagName('path');
        foreach ($xpath as $el) {
            $el->removeAttribute('id');
        }
        $circle = $dom->getElementsByTagName('circle');
        foreach ($circle as $el) {
            $el->removeAttribute('id');
        }
        $use = $dom->getElementsByTagName('use');
        foreach ($use as $el) {
            $el->removeAttribute('id');
        }
        $polygon = $dom->getElementsByTagName('polygon');
        foreach ($polygon as $el) {
            $el->removeAttribute('id');
        }
        $ellipse = $dom->getElementsByTagName('ellipse');
        foreach ($ellipse as $el) {
            $el->removeAttribute('id');
        }

        $string = $dom->saveXML($dom->documentElement);

        // remove empty lines
        $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $string);

        $cls = array('svg-icon');

        if (!empty($class)) {
            $cls = array_merge($cls, explode(' ', $class));
        }

        $asd = explode('/media/', $path);
        if (isset($asd[1])) {
            $path = 'assets/media/' . $asd[1];
        }

        $output = "<!--begin::Svg Icon | path: $path-->\n";
        $output .= '<span class="' . implode(' ', $cls) . '">' . $string . '</span>';
        $output .= "\n<!--end::Svg Icon-->";

        return $output;
    }
}

if (!function_exists('theme')) {
    /**
     * Get the instance of Theme class core
     *
     * @return \App\Core\Adapters\Theme|\Illuminate\Contracts\Foundation\Application|mixed
     */
    function theme()
    {
        return app(\App\Core\Adapters\Theme::class);
    }
}

if (!function_exists('util')) {
    /**
     * Get the instance of Util class core
     *
     * @return \App\Core\Adapters\Util|\Illuminate\Contracts\Foundation\Application|mixed
     */
    function util()
    {
        return app(\App\Core\Adapters\Util::class);
    }
}

if (!function_exists('bootstrap')) {
    /**
     * Get the instance of Util class core
     *
     * @return \App\Core\Adapters\Util|\Illuminate\Contracts\Foundation\Application|mixed
     * @throws Throwable
     */
    function bootstrap()
    {
        $demo      = ucwords(theme()->getDemo());
        $bootstrap = "\App\Core\Bootstraps\Bootstrap$demo";

        if (!class_exists($bootstrap)) {
            abort(404, 'Demo has not been set or ' . $bootstrap . ' file is not found.');
        }

        return app($bootstrap);
    }
}

if (!function_exists('assetCustom')) {
    /**
     * Get the asset path of RTL if this is an RTL request
     *
     * @param $path
     * @param  null  $secure
     *
     * @return string
     */
    function assetCustom($path)
    {
        // Include rtl css file
        if (isRTL()) {
            return asset(theme()->getDemo() . '/' . dirname($path) . '/' . basename($path, '.css') . '.rtl.css');
        }

        // Include dark style css file
        if (theme()->isDarkModeEnabled() && theme()->getCurrentMode() !== 'default') {
            $darkPath = str_replace('.bundle', '.' . theme()->getCurrentMode() . '.bundle', $path);
            if (file_exists(public_path(theme()->getDemo() . '/' . $darkPath))) {
                return asset(theme()->getDemo() . '/' . $darkPath);
            }
        }

        // Include default css file
        return asset(theme()->getDemo() . '/' . $path);
    }
}

if (!function_exists('isRTL')) {
    /**
     * Check if the request has RTL param
     *
     * @return bool
     */
    function isRTL()
    {
        return (bool) request()->input('rtl');
    }
}
