// SCREEN 6: Stalls
// Layout: simple list of stall cards (emoji, name, specialty, location, hours).
import React, { useEffect, useState } from 'react';
import { FlatList, StyleSheet, Text } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { colors, font, spacing } from '@/constants/theme';
import { mockStalls } from '@/constants/mockData';
import StallCard from '@/components/StallCard';
import axios from 'axios';

export default function StallsScreen() {
  // MAO NI ANG REQUEST PARA SA STALLS
  const  [stalls, setStalls] = useState(null);

          useEffect(() => {
            axios
              .get('http://localhost:8000/api/stalls')
              .then((response) => {
                setStalls(response.data);
              });


          });

        

  return (
    <SafeAreaView edges={['top']} style={styles.screen}>
      <Text style={styles.title}>Canteen stalls</Text>
      <Text style={styles.sub}>Find who sells what and where.</Text>
      <FlatList
        data={stalls}
        keyExtractor={(s) => String(s.id)}
        contentContainerStyle={styles.list}
        renderItem={({ item }) => <StallCard stall={item} />}
      />
    </SafeAreaView>
  );

}


const styles = StyleSheet.create({
  screen: { flex: 1, backgroundColor: colors.background },
  title: { fontSize: font.xl, fontWeight: '800', color: colors.text, paddingHorizontal: spacing.lg, paddingTop: spacing.md },
  sub: { fontSize: font.sm, color: colors.textMuted, paddingHorizontal: spacing.lg, marginTop: spacing.xs },
  list: { padding: spacing.lg },
});
