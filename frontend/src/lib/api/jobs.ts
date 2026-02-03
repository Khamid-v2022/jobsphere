import { Job } from "../types/job";

const BASE = process.env.NEXT_PUBLIC_API;

export async function getJobs(): Promise<{ data: Job[] }> {
  const res = await fetch(`${BASE}/jobs`);
  if (!res.ok) throw new Error("Failed to fetch jobs");
  return res.json();
}

export async function getJob(id: number): Promise<Job> {
  const res = await fetch(`${BASE}/jobs/${id}`);
  if (!res.ok) throw new Error("Failed to fetch job");
  return res.json();
}

export async function createJob(title: string, description: string) {
  const res = await fetch(`${BASE}/jobs`, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ title, description }),
  });

  if (!res.ok) throw new Error("Failed to create job");
  return res.json();
}