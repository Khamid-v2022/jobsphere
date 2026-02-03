export interface Job {
    id: number;
    title: string;
    description: string;
    user_id: number;
    status: 'open' | 'closed';
    created_at: string;
    updated_at: string;
}