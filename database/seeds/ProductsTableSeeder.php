<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          [
            'name' => 'Desktop PC',
            'image' => 'desktop-setup.jpeg',
            'description' => 'From traditional desktop and monitor setups to stylish all-in-one PCs, from business and gaming powerhouses to family-friendly entertainment setups: Lenovo has the right desktop for you.
            Performance desktops for professionals, and gamers who demand serious horsepower.
            Sleek, stylish all-in-one desktops for business, gaming, and family fun.
            Budget desktops that deliver value without sacrificing on performance.
            Groundbreaking compact desktops for your home and office.
            Business Desktops
 ThinkCentre desktops power the work lives of professionals across the world. Engineered to maximize productivity, they’re durable, reliable, and secure. Form factors range from traditional tower desktops to ultracompact powerhouses to streamlined all-in-ones.
            Gaming Desktops Dominate your competitors with Lenovo Legion, hardcore upgradable gaming desktops that boast powerful discrete graphics, high-end processors, and maxed-out storage and memory. Choose among towers, compact, cool-looking cube models, and all-in-ones. Family and Entertainment Desktops Whether you’re looking for a stylish entertainment all-in-one desktop, an easy-to-upgrade tower powerhouse, a reliable family desktop – or even a desktop so small it can fit in your pocket – Lenovo has a PC to hit your sweet spot. We even offer an innovative portable all-in-one that also serves as a giant tabletop tablet.
            
            Desktop Deals Want to keep it simple? No problem – we have deals on desktops that deliver value without sacrificing on performance.', 
            'price' => '210000', 
          ],
          [
            'name' => 'Galaxy S8',
            'image' => 'galaxy-phone.jpeg',
            'description' => 'The Samsung Galaxy S8, Samsung Galaxy S8+ (shortened to S8 and S8+, respectively) and Samsung Galaxy S8 Active are Android smartphones produced by Samsung Electronics as part of the Samsung Galaxy S series. The S8 and S8+ were unveiled on 29 March 2017 and directly succeed the Samsung Galaxy S7 and S7 Edge, with a North American release on 21 April 2017 and international rollout throughout April and May. The S8 Active was announced on 8 August 2017, and is exclusive to certain U.S. cellular carriers.

            The S8 and S8+ contain upgraded hardware and major design changes over the S7 line, including larger screens with a taller aspect ratio and curved sides on both the smaller and larger models, iris and face recognition, a new suite of virtual assistant features known as Bixby (along with a new dedicated physical button for launching the assistant), and Samsung DeX, a docking station accessory that allows the phones to be used with a desktop interface with keyboard and mouse input support. The S8 Active features tougher materials designed for protection against shock, shatter, water and dust, with a metal frame and a rugged, tough texture for improved grip. The Active\'s screen measures the same size as the standard S8 model, but loses the curved edges in favor of a metal frame.
            
            The S8 and S8+ received mostly positive reviews. Their design and form factor received praise, while critics also liked the updated software and camera optimizations. They received criticism for duplicate software apps, lackluster Bixby features at launch, for the placement of the fingerprint sensor on the rear next to the camera and for poor biometric options for unlocking the phone. Videos published after the phones\' release have proven that the devices\' facial and iris scanners can be fooled by suitable photographs of the user.
            
            The S8 and S8+ were in high demand at release. During the pre-order period, a record one million units were booked in South Korea, and overall sales numbers were 30% higher than the Galaxy S7. However, subsequent reports in May announced sales of over five million units, a notably lower first-month sales number than previous Galaxy S series models.',
            'price' => '210000', 
          ],
        ]);
    }
}
