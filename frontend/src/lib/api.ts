const BASE = process.env.NEXT_PUBLIC_API;

export async function getJobs() {
    const res = await fetch(`${BASE}/jobs`);
    return res.json();
}

export async function getJob(id: number) {
    const res = await fetch(`${BASE}/jobs/${id}`);
    return res.json();
}

export async function createJob(title: string, description: string) {
    const res = await fetch(`${BASE}/jobs`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ title, description }),
    });
    return res.json();
}