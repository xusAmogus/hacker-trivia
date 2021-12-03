export const routes = [
    {
        path:'/manage',
        component: () => import('../pages/ManageQuestions'),
        name: 'Manage Questions'
    },
    {
        path:'/game',
        component: () => import('../pages/Game'),
        name: 'Game'
    }
   
]
