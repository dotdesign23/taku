<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PlantsSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'id' => 1,
                'category_name' => 'Indoor',
            ],
            [
                'id' => 2,
                'category_name' => 'Outdoor',
            ],
        ];

        $description = "Lorem ipsum dolor sit amet consectetur. Pellentesque purus faucibus maecenas cras amet a lobortis. Gravida vulputate tortor mauris velit. Purus aliquam sed mauris eros. Dui et viverra blandit in ullamcorper nibh eu. Sapien volutpat nec arcu sed neque a platea elementum non. Euismod magnis velit sit risus egestas viverra metus. Donec porttitor nisl rhoncus eget arcu. Imperdiet etiam libero malesuada nunc dui pretium. Turpis ipsum nibh malesuada ultricies.";
        $guide = "
        <ul>
            <li>Lorem ipsum dolor sit amet consectetur. Quam arcu semper mattis sit ante amet mattis hendrerit.</li>
            <li>Mus adipiscing accumsan nulla elementum turpis ornare fermentum.</li>
            <li>Purus purus eu nisi condimentum aliquam molestie urna diam. Pharetra eget sed etiam ipsum amet.</li>
            <li>Mauris dolor eget et eget mauris lacus mauris blandit. A diam pulvinar neque quam amet volutpat. Fringilla arcu leo imperdiet vel.</li>
            <li>Lorem sagittis nullam venenatis diam purus diam tincidunt nisl. Sed ut sapien cras turpis dignissim consequat sed.</li>
        </ul>
        ";
        $additional_text = "Lorem ipsum dolor sit amet consectetur. Pellentesque purus faucibus maecenas cras amet a lobortis. Gravida vulputate tortor mauris velit. Purus aliquam sed mauris eros. Dui et viverra blandit in ullamcorper nibh eu. Sapien volutpat nec arcu sed neque a platea elementum non. Euismod magnis velit sit risus egestas viverra metus. Donec porttitor nisl rhoncus eget arcu. Imperdiet etiam libero malesuada nunc dui pretium. Turpis ipsum nibh malesuada ultricies.";

        $plants = [
            [
                'id' => 1,
                'title' => 'Peace Lily',
                'description' => $description,
                'guide' => $guide,
                'additional_text' => $additional_text,
                'image1' => '/img/plant/Rectangle 33.png',
                'image2' => '/img/plant/Rectangle 33.png',
                'image_vertical' => '/img/plant/Rectangle 10.png',
                'category_id' => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'id' => 2,
                'title' => 'Ficus Elastica',
                'description' => $description,
                'guide' => $guide,
                'additional_text' => $additional_text,
                'image1' => '/img/plant/Rectangle 34.png',
                'image2' => '/img/plant/Rectangle 34.png',
                'image_vertical' => '/img/plant/Rectangle 8.png',
                'category_id' => 1,
                'created_at' => Time::parse('1 day ago'),
                'updated_at' => Time::parse('1 day ago'),
            ],
            [
                'id' => 3,
                'title' => 'Dragon Tree',
                'description' => $description,
                'guide' => $guide,
                'additional_text' => $additional_text,
                'image1' => '/img/plant/Rectangle 35.png',
                'image2' => '/img/plant/Rectangle 35.png',
                'image_vertical' => '/img/plant/Rectangle 9.png',
                'category_id' => 1,
                'created_at' => Time::parse('2 day ago'),
                'updated_at' => Time::parse('2 day ago'),
            ],
            [
                'id' => 4,
                'title' => 'Paku Tanduk Rusa',
                'description' => $description,
                'guide' => $guide,
                'additional_text' => $additional_text,
                'image1' => '/img/plant/Rectangle 36.png',
                'image2' => '/img/plant/Rectangle 36.png',
                'image_vertical' => '/img/plant/Rectangle 10.png',
                'category_id' => 1,
                'created_at' => Time::parse('3 day ago'),
                'updated_at' => Time::parse('3 day ago'),
            ],
            [
                'id' => 5,
                'title' => 'Philodendron Selloum',
                'description' => $description,
                'guide' => $guide,
                'additional_text' => $additional_text,
                'image1' => '/img/plant/Rectangle 37.png',
                'image2' => '/img/plant/Rectangle 37.png',
                'image_vertical' => '/img/plant/Rectangle 10.png',
                'category_id' => 2,
                'created_at' => Time::parse('4 day ago'),
                'updated_at' => Time::parse('4 day ago'),
            ],
            [
                'id' => 6,
                'title' => 'Lidah Mertua',
                'description' => $description,
                'guide' => $guide,
                'additional_text' => $additional_text,
                'image1' => '/img/plant/Rectangle 38.png',
                'image2' => '/img/plant/Rectangle 38.png',
                'image_vertical' => '/img/plant/Rectangle 10.png',
                'category_id' => 2,
                'created_at' => Time::parse('5 day ago'),
                'updated_at' => Time::parse('5 day ago'),
            ],
            [
                'id' => 7,
                'title' => 'Old Pine Bonsai',
                'description' => $description,
                'guide' => $guide,
                'additional_text' => $additional_text,
                'image1' => '/img/plant/Rectangle 39.png',
                'image2' => '/img/plant/Rectangle 39.png',
                'image_vertical' => '/img/plant/Rectangle 10.png',
                'category_id' => 2,
                'created_at' => Time::parse('6 day ago'),
                'updated_at' => Time::parse('6 day ago'),
            ],
            [
                'id' => 8,
                'title' => 'Sirih Gading',
                'description' => $description,
                'guide' => $guide,
                'additional_text' => $additional_text,
                'image1' => '/img/plant/Rectangle 40.png',
                'image2' => '/img/plant/Rectangle 40.png',
                'image_vertical' => '/img/plant/Rectangle 10.png',
                'category_id' => 2,
                'created_at' => Time::parse('7 day ago'),
                'updated_at' => Time::parse('7 day ago'),
            ],
        ];

        $this->db->table('categories')->insertBatch($categories);
        $this->db->table('plants')->insertBatch($plants);
    }
}
