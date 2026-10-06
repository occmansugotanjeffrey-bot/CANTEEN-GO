// PLACEHOLDER DATA so you can preview the design right away.
// Your job: replace every use of these with data fetched from YOUR Laravel API via Axios,
// then delete this file. Do not submit the app still reading from here.

import { Category, Deal, Food, Order, Stall } from '@/types';

export const mockCategories: Category[] = [
  { id: 1, name: 'Meals', emoji: '🍛' },
  { id: 2, name: 'Snacks', emoji: '🥟' },
  { id: 3, name: 'Drinks', emoji: '🧋' },
  { id: 4, name: 'Desserts', emoji: '🍧' },
];

export const mockFoods: Food[] = [
  { id: 1, name: 'Crispy Chicken Rice', price: 55, stall: "Aling Nena's Kitchen", category: 'Meals', emoji: '🍛', description: 'Soy-vinegar chicken with a scoop of steamed rice.' },
  { id: 2, name: 'Tapsilog', price: 65, stall: "Aling Nena's Kitchen", category: 'Meals', emoji: '🍳', description: 'Beef tapa, garlic rice and a fried egg.' },
  { id: 3, name: 'Pancit canton', price: 30, stall: "Mang Ben's Noodles", category: 'Meals', emoji: '🍜', description: 'Stir-fried noodles with vegetables. Good for sharing.' },
  { id: 4, name: 'Banana cue', price: 15, stall: 'Tindahan ni Lola', category: 'Snacks', emoji: '🍌', description: 'Caramelized saba banana on a stick.' },
  { id: 5, name: 'Siomai (4 pcs)', price: 25, stall: "Mang Ben's Noodles", category: 'Snacks', emoji: '🥟', description: 'Steamed pork dumplings with chili-soy dip.' },
  { id: 6, name: 'Iced tea', price: 20, stall: 'Juice Corner', category: 'Drinks', emoji: '🧋', description: 'Cold lemon iced tea, 16 oz.' },
  { id: 7, name: 'Calamansi juice', price: 25, stall: 'Juice Corner', category: 'Drinks', emoji: '🍋', description: 'Fresh calamansi, lightly sweet.' },
  { id: 8, name: 'Halo-halo', price: 45, stall: 'Tindahan ni Lola', category: 'Desserts', emoji: '🍧', description: 'Shaved ice, sweet beans, leche flan and ube.' },
];


export const mockStalls: Stall[] = [
  { id: 1, name: "Aling Nena's Kitchen", location: 'Ground floor, near the gate', specialty: 'Rice meals', hours: '7:00 AM – 4:00 PM', emoji: '🍚' },
  { id: 2, name: "Mang Ben's Noodles", location: 'Beside the library', specialty: 'Noodles and dumplings', hours: '8:00 AM – 3:00 PM', emoji: '🍜' },
  { id: 3, name: 'Juice Corner', location: 'Center of the canteen', specialty: 'Cold drinks', hours: '7:00 AM – 5:00 PM', emoji: '🥤' },
  { id: 4, name: 'Tindahan ni Lola', location: 'Back entrance', specialty: 'Merienda and desserts', hours: '9:00 AM – 5:00 PM', emoji: '🍧' },
];

export const mockOrders: Order[] = [
  { id: 1024, status: 'Preparing', total: 80, pickup_time: '10:00 AM break', items: ['Chicken adobo rice', 'Iced tea'] },
  { id: 1019, status: 'Ready for pickup', total: 45, pickup_time: '12:00 PM lunch', items: ['Halo-halo'] },
  { id: 1007, status: 'Picked up', total: 55, pickup_time: '10:00 AM break', items: ['Pancit canton', 'Calamansi juice'] },
];
