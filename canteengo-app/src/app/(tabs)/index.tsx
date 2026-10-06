// SCREEN 1: Home
// Layout: ube header with greeting + budget shortcuts, deals carousel, category chips, popular list.
import React from 'react';
import { FlatList, Pressable, ScrollView, StyleSheet, Text, View } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { useRouter } from 'expo-router';
import { colors, font, radius, spacing } from '@/constants/theme';
import { mockCategories, mockFoods } from '@/constants/mockData';
import { useCart } from '@/context/CartContext';
import CategoryChip from '@/components/CategoryChip';
import DealBanner from '@/components/DealBanner';
import FoodCard from '@/components/FoodCard';
import axios from 'axios';
import { useEffect, useState } from 'react';

export default function HomeScreen() {
  const router = useRouter();
  const { addItem } = useCart();

  // TODO (YOU): replace these three with state filled by your Axios requests.
  const [categories, setCategories] = useState<any[]>([]);

    useEffect(() => {
      axios
        .get('http://localhost:8000/api/categories')
        .then((response) => {
          setCategories(response.data);
        })
        .catch((error) => {
          console.error('Error fetching categories:', error);
        });
    }, []);
  const[deals, setDeals] = useState<any[]>([]);

    useEffect(() => {
      axios
        .get('http://localhost:8000/api/deals')
        .then((response) => {
          setDeals(response.data);
        })
        .catch((error) => {
          console.error('Error fetching deals:', error);
        });
    }, []);
  const popular = mockFoods.slice(0, 4);

  const openMenu = (params: { category?: string; maxPrice?: string }) =>
    router.push({ pathname: '/menu', params });

  return (
    <View style={styles.screen}>
      <SafeAreaView edges={['top']} style={styles.header}>
        <Text style={styles.greeting}>What's for break today?</Text>
        <Text style={styles.sub}>Order ahead and skip the line.</Text>
        <View style={styles.budgetRow}>
          <Pressable style={styles.budgetBtn} onPress={() => openMenu({ maxPrice: '30' })}>
            <Text style={styles.budgetText}>₱30 or less</Text>
          </Pressable>
          <Pressable style={styles.budgetBtn} onPress={() => openMenu({ maxPrice: '50' })}>
            <Text style={styles.budgetText}>₱50 or less</Text>
          </Pressable>
        </View>
      </SafeAreaView>

      <ScrollView contentContainerStyle={styles.content} showsVerticalScrollIndicator={false}>
        <Text style={styles.sectionTitle}>Student deals</Text>
        <FlatList
          horizontal
          data={deals}
          keyExtractor={(d) => String(d.id)}
          renderItem={({ item }) => <DealBanner deal={item} />}
          showsHorizontalScrollIndicator={false}
          style={styles.hList}
        />

        <Text style={styles.sectionTitle}>Categories</Text>
        <ScrollView horizontal showsHorizontalScrollIndicator={false} style={styles.hList}>
          {categories.map((c) => (
            <CategoryChip key={c.id} label={c.name} emoji={c.emoji} onPress={() => openMenu({ category: c.name })} />
          ))}
        </ScrollView>

        <Text style={styles.sectionTitle}>Popular today</Text>
        {popular.map((food) => (
          <FoodCard
            key={food.id}
            food={food}
            onPress={() => router.push({ pathname: '/food/[id]', params: { id: String(food.id) } })}
            onAdd={() => addItem(food)}
          />
        ))}
      </ScrollView>
    </View>
  );
}

const styles = StyleSheet.create({
  screen: { flex: 1, backgroundColor: colors.background },
  header: {
    backgroundColor: colors.primary,
    paddingHorizontal: spacing.lg,
    paddingBottom: spacing.xl,
    borderBottomLeftRadius: radius.lg + 6,
    borderBottomRightRadius: radius.lg + 6,
  },
  greeting: { fontSize: font.xl, fontWeight: '800', color: '#fff', marginTop: spacing.md },
  sub: { fontSize: font.sm, color: '#D9CFF0', marginTop: spacing.xs },
  budgetRow: { flexDirection: 'row', marginTop: spacing.lg },
  budgetBtn: {
    backgroundColor: colors.accent,
    borderRadius: radius.pill,
    paddingHorizontal: spacing.lg,
    paddingVertical: spacing.sm,
    marginRight: spacing.sm,
  },
  budgetText: { fontSize: font.sm, fontWeight: '800', color: colors.accentText },
  content: { padding: spacing.lg, paddingBottom: spacing.xxl },
  sectionTitle: { fontSize: font.lg, fontWeight: '700', color: colors.text, marginTop: spacing.lg, marginBottom: spacing.md },
  hList: { flexGrow: 0 },
});
