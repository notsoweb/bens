<script setup>
import Item            from '@/Components/Dashboard/Help/Item.vue';
import PageHeader      from '@/Components/Dashboard/PageHeader.vue';
import Table           from '@/Components/Dashboard/Table.vue';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';

defineProps({
    users: String
});
</script>

<template>
  <DashboardLayout :title="$t('changelogs.title')">
    <PageHeader />
    <div class="w-full">
      <div class="mt-4">
        <p
          v-text="$t('changelogs.description')"
        />
      </div>
    </div>
    <div class="w-full">
      <Table :items="{total:1}">
        <template #head>
          <th
            class="table-item"
            v-text="$t('version')"
          />
          <th
            class="table-item"
            v-text="$t('description')"
          />
        </template>
        <template #body>
          <Item version="0.1.0">
            <p class="font-semibold">
              <ul class="list-disc list-inside">
                <li>Inicio del proyecto.</li>
              </ul>
            </p>
          </Item>
        </template>
      </Table>
    </div>
  </DashboardLayout>
</template>
