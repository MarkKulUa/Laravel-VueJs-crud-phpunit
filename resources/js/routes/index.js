import { createRouter, createWebHistory } from "vue-router";

import CompaniesIndex from '../components/companies/CompaniesIndex'
import CompaniesCreate from '../components/companies/CompaniesCreate'
import CompaniesEdit from '../components/companies/CompaniesEdit'

const routes = [
    {
        path: '/dashboard',
        name: 'companies.index',
        component: CompaniesIndex
    },
    {
        path: '/companies/create',
        name: 'companies.create',
        component: CompaniesCreate
    },
    {
        path: '/companies/:id/edit',
        name: 'companies.edit',
        component: CompaniesEdit,
        props: true
    },
    // {
    //     path: '/import/contacts',
    //     name: 'contacts.index',
    //     component: ContactsIndex,
    //     props: true
    // },
    // {
    //     path: '/import/parse',
    //     name: 'import.parse',
    //     component: ImportParse,
    //     props: true
    // },
    // {
    //     path: '/import/process',
    //     name: 'import.process',
    //     component: ImportProcess,
    //     props: true
    // }
]

export default createRouter({
    history: createWebHistory(),
    routes
})
