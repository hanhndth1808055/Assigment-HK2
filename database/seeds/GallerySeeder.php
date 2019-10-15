<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GallerySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('gallery_images')->count() == 0) {
            $data = array(
                array('link' => 'https://www.edc.org/sites/default/files/Early-Childhood.jpg',
                    'description' => 'EduPan supports the development of engaging and safe educational programs for young children.'),
                array('link' => 'https://www.edc.org/sites/default/files/Elemen-Sec-Ed_MG_0351-zambia_0.jpg',
                    'description' => 'EduPan - Improving early learning opportunities and outcomes'),
                array('link' => 'https://www.pdfa.org/wp-content/uploads/2019/06/EDC-in-action-wpv_1024x.jpg',
                    'description' => 'EduPan Conference 2019 in Settle.'),
                array('link' => 'https://www.edc.org/sites/default/files/OSY_OST.jpg',
                    'description' => 'Out-of-School Learning: Creating opportunities that open doors for learners of all ages'),
                array('link' => 'https://www.edc.org/sites/default/files/Rwanda.jpg',
                    'description' => 'EduPan\'s support in Rwanda.'),
                array('link' => 'https://www.edc.org/sites/default/files/edc_homepage_images/Hero_5.11.17.jpg',
                    'description' => 'How does learning transform lives?'),
                array('link' => 'https://pbs.twimg.com/media/EC4LS5oXoAAQhbC.jpg',
                    'description' => 'EduPan Presents at the 2019 Global Youth Economic Opportunities Summit.'),
                array('link' => 'https://media.glassdoor.com/l/08/6f/31/cd/annual-conference-dc.jpg',
                    'description' => 'EduPan and the National Association for the Education of Young Children Annual Conference, June 7-10, New Orleans, LA'),
                array('link' => 'https://kentuckyliteracy.org/wp-content/uploads/2019/10/TLI-19-TL-photo-1-1024x543.jpg',
                    'description' => 'Reading Recovery Council of North America, National Reading Recovery and K-6 Literacy Conference, Feb 7-10, Columbus, OH'),
                array('link' => 'https://pbs.twimg.com/media/D5aQIE7W0AA2Xuo.jpg',
                    'description' => 'National Training Institute, Effective Practices for Addressing Challenging Behavior, April 21-24, St. Petersburg, FL'),
                array('link' => 'https://fpg.unc.edu/sites/fpg.unc.edu/files/imagecache/slider/imagefield_images/slideshow/CCHD2019-2020.jpg',
                    'description' => 'Frank Porter Graham Institute, Early Childhood Inclusion, May 12-14, Chapel Hill, NC'),
                array('link' => 'https://cdn.americanprogress.org/wp-content/uploads/2014/03/05093122/AP110329187444-620.jpg',
                    'description' => 'Division for Early Childhood, Young Children with Special Needs, Oct 7-9, Atlanta, GA'),
                array('link' => 'https://www.earlychildhoodeducationzone.com/wp-content/uploads/2015/01/edu-conferences-2015.jpg',
                    'description' => 'Fordham University and Los Ninos; Young Child Expo and Conference, Apr 22-24, New York, NY'),
                array('link' => 'https://www.nhsa.org/files/styles/sidebar_full_width_image/public/2018-national-conference.jpg',
                    'description' => 'National Head Start Association Conference and Expo, Mar 29-Apr 2, Washington, D.C.'),
                array('link' => 'https://www.ilmexhibitions.com/images/methane/methane-conference.jpg',
                    'description' => 'ASCD – 70th Annual Conference, Mar 21-23, Houston, Texas'),
            );
            DB::table('gallery_images')->insert($data);
        }
    }
}
