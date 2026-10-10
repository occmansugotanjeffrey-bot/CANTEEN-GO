<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/stalls', function () {
     return response()->json( [
       
  [
    "id" => 1,
    "name" => "Tasty Bites",
    "specialty" => "Chicken Rice Meals",
    "location" => "Main Canteen",
    "hours" => "7:00 AM - 5:00 PM",
    "emoji" => "🍗"
  ],
  [
    "id" => 2,
    "name" => "The Hungry Hub",
    "specialty" => "Burgers & Fries",
    "location" => "Building A",
    "hours" => "8:00 AM - 4:30 PM",
    "emoji" => "🍔"
  ],
  [
    "id" => 3,
    "name" => "Sarap Station",
    "specialty" => "Pancit & Noodles",
    "location" => "Main Canteen",
    "hours" => "7:30 AM - 5:00 PM",
    "emoji" => "🍜"
  ],
  [
    "id" => 4,
    "name" => "Kusina ni Juan",
    "specialty" => "Filipino Rice Meals",
    "location" => "Building B",
    "hours" => "7:00 AM - 5:00 PM",
    "emoji" => "🍛"
  ],
  [
    "id" => 5,
    "name" => "Quick Eats",
    "specialty" => "Hotdogs & Sandwiches",
    "location" => "Student Center",
    "hours" => "8:00 AM - 4:00 PM",
    "emoji" => "🌭"
  ],
  [
    "id" => 6,
    "name" => "Cool Sips",
    "specialty" => "Milk Tea & Fruit Drinks",
    "location" => "Main Canteen",
    "hours" => "9:00 AM - 5:00 PM",
    "emoji" => "🥤"
  ],
  [
    "id" => 7,
    "name" => "Pizza Corner",
    "specialty" => "Pizza & Garlic Bread",
    "location" => "Building A",
    "hours" => "8:00 AM - 5:00 PM",
    "emoji" => "🍕"
  ],
  [
    "id" => 8,
    "name" => "Lutong Bahay",
    "specialty" => "Home-style Meals",
    "location" => "Building B",
    "hours" => "7:00 AM - 5:00 PM",
    "emoji" => "🍱"
  ],
  [
    "id" => 9,
    "name" => "Sweet Treats",
    "specialty" => "Donuts & Pastries",
    "location" => "Student Center",
    "hours" => "8:00 AM - 4:30 PM",
    "emoji" => "🍩"
  ],
  [
    "id" => 10,
    "name" => "Bite & Go",
    "specialty" => "BBQ & Street Food",
    "location" => "Main Canteen",
    "hours" => "9:00 AM - 5:00 PM",
    "emoji" => "🍢"
  ]

    ]);

  
});

Route::get('/categories', function () {
    return response()->json([
        [
            "id" => 1,
            "name" => "Beverages",
            "emoji" => "🥤"
        ],
        [
            "id" => 2,
            "name" => "Snacks",
            "emoji" => "🍿"
        ],
        [
            "id" => 3,
            "name" => "Meals",
            "emoji" => "🍽️"
        ],
        [
            "id" => 4,
            "name" => "Desserts",
            "emoji" => "🍰"
        ]
    ]);
});

Route::get('/deals', function () {
    return response()->json([
        [
            "id" => 1,
            "title" => "Buy 1 Get 1 Free",
            "description" => "Get a free drink with every meal purchase.",
            "price" => "₱70"
        ],
        [
            "id" => 2,
            "title" => "20% Off Snacks",
            "description" => "Enjoy 20% off on all snack items.",
            "price" => "Save ₱5"
        ],
        [
            "id" => 3,
            "title" => "Free Dessert",
            "description" => "Receive a free dessert with any main course.",
            "price" => "₱35"
        ],
        [
            "id" => 4,
            "title" => "Combo Meal Deal",
            "description" => "Get a combo meal at a discounted price.",
            "price" => "₱50"
        ]
    ]);
});

Route::get('/foods', function () {
    return response()->json([
        [
            "id" => 1,
            "name" => "Crispy Chicken Rice",
            "price" => 55,
            "stall" => "Tasty Bites",
        "category" => "Meals",
        "description" => "Crispy fried chicken served with steamed rice.",
        "emoji" => "🍗"
    ],
    [
        "id" => 2,
        "name" => "Tapsilog",
        "price" => 65,
        "stall" => "Tasty Bites",
        "category" => "Meals",
        "description" => "Juicy and crispy chicken wings.",
        "emoji" => "🍳"
    ],
    [
        "id" => 3,
        "name" => "Bangsilog",
        "price" => 55,
        "stall" => "Tasty Bites",
        "category" => "Meals",
        "description" => "Fried bangus served with garlic rice and egg.",
        "emoji" => "🐟"
    ],
    [
        "id" => 4,
        "name" => "Cheesy Burger",
        "price" => 60,
        "stall" => "The Hungry Hub",
        "category" => "Snacks",
        "description" => "Juicy burger topped with melted cheese.",
        "emoji" => "🍔"
    ],
    [
        "id" => 5,
        "name" => "Burger & Fries",
        "price" => 70,
        "stall" => "The Hungry Hub",
        "category" => "Snacks",
        "description" => "Classic burger served with crispy french fries.",
        "emoji" => "🍟"
    ],
    [
        "id" => 6,
        "name" => "French Fries",
        "price" => 35,
        "stall" => "The Hungry Hub",
        "category" => "Snacks",
        "description" => "Crispy golden french fries.",
        "emoji" => "🍟"
    ],
    [
        "id" => 7,
        "name" => "Pancit Canton",
        "price" => 50,
        "stall" => "Sarap Station",
        "category" => "Meals",
        "description" => "Stir-fried noodles with vegetables and chicken.",
        "emoji" => "🍜"
    ],
    [
        "id" => 8,
        "name" => "Pancit Bihon",
        "price" => 45,
        "stall" => "Sarap Station",
        "category" => "Meals",
        "description" => "Filipino rice noodles with vegetables and meat.",
        "emoji" => "🍜"
    ],
    [
        "id" => 9,
        "name" => "Chicken Mami",
        "price" => 40,
        "stall" => "Sarap Station",
        "category" => "Meals",
        "description" => "Warm chicken noodle soup perfect for students.",
        "emoji" => "🍜"
    ],
    [
        "id" => 10,
        "name" => "Chicken Adobo Rice",
        "price" => 50,
        "stall" => "Kusina ni Juan",
        "category" => "Meals",
        "description" => "Classic Filipino chicken adobo served with rice.",
        "emoji" => "🍛"
    ],
    [
        "id" => 11,
        "name" => "Longsilog",
        "price" => 50,
        "stall" => "Kusina ni Juan",
        "category" => "Meals",
        "description" => "Sweet Filipino longganisa served with garlic rice and egg.",
        "emoji" => "🍳"
    ],
    [
        "id" => 12,
        "name" => "Tapsilog",
        "price" => 55,
        "stall" => "Lutong Bahay",
        "category" => "Meals",
        "description" => "Beef tapa served with garlic rice and fried egg.",
        "emoji" => "🥩"
    ],
    [
        "id" => 13,
        "name" => "Pork Sinigang Rice",
        "price" => 55,
        "stall" => "Lutong Bahay",
        "category" => "Meals",
        "description" => "Sour and savory pork sinigang served with rice.",
        "emoji" => "🍲"
    ],
    [
        "id" => 14,
        "name" => "Ham & Cheese Sandwich",
        "price" => 40,
        "stall" => "Quick Eats",
        "category" => "Snacks",
        "description" => "Toasted sandwich filled with ham and melted cheese.",
        "emoji" => "🥪"
    ],
    [
        "id" => 15,
        "name" => "Cheesy Hotdog",
        "price" => 40,
        "stall" => "Quick Eats",
        "category" => "Snacks",
        "description" => "Hotdog topped with melted cheese.",
        "emoji" => "🌭"
    ],
    [
        "id" => 16,
        "name" => "Cheese Pizza",
        "price" => 120,
        "stall" => "Pizza Corner",
        "category" => "Snacks",
        "description" => "Cheesy pizza with a crispy crust.",
        "emoji" => "🍕"
    ],
    [
        "id" => 17,
        "name" => "Filipino Spaghetti",
        "price" => 45,
        "stall" => "Pizza Corner",
        "category" => "Snacks",
        "description" => "Sweet-style Filipino spaghetti with cheese.",
        "emoji" => "🍝"
    ],
    [
        "id" => 18,
        "name" => "Milk Tea",
        "price" => 50,
        "stall" => "Cool Sips",
        "category" => "Beverages",
        "description" => "Creamy milk tea with chewy tapioca pearls.",
        "emoji" => "🧋"
    ],
    [
        "id" => 19,
        "name" => "Chocolate Donut",
        "price" => 30,
        "stall" => "Sweet Treats",
        "category" => "Desserts",
        "description" => "Soft donut covered with chocolate glaze.",
        "emoji" => "🍩"
    ],
    [
        "id" => 20,
        "name" => "BBQ Rice Meal",
        "price" => 45,
        "stall" => "Bite & Go",
        "category" => "Meals",
        "description" => "Grilled Filipino-style barbecue served with rice.",
        "emoji" => "🍢"
    ],
]);
});

Route::get('/announcements', function () {
    return response()->json([
        [
            "id" => 1,
            "title" => "Canteen Maintenance",
            "message" => "The canteen will be closed for maintenance on June 15th. We apologize for any inconvenience."
        ],
        [
            "id" => 2,
            "title" => "New Stall Opening",
            "message" => "Exciting news! A new stall, 'Sarap Station,' will be opening next week. Get ready for delicious meals!"
        ],
        [
            "id" => 3,
            "title" => "Special Promotion",
            "message" => "Enjoy a special promotion this week! Buy one meal and get a free drink at 'Tasty Bites.'"
        ]
    ]);
});